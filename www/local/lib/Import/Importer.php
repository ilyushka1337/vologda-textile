<?
namespace Placestart\Import;

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\Application;
use Bitrix\Main\Entity\AddResult;
use Placestart\Import\Entity\WildberriesCardTable;
use Placestart\Import\Entity\XlsxProductTable;
use Placestart\Import\Exception\ImporterSaveRowsFailureException;
use Placestart\WildberriesApi\Model\ContentV2GetCardsListPostBody;

final class Importer
{
    private array $tableMap;

    function __construct(
        private XlsxHelper $xlsxHelper,
        private CatalogHelper $catalogHelper,
        private \Placestart\WildberriesApi\Client $wildberriesClient
    ) {
        /** @var \Bitrix\Main\ORM\Fields\ScalarField $field */
        $tableMap = array_map(fn($field) => $field->getName(), XlsxProductTable::getMap());
        array_shift($tableMap);
        $this->tableMap = $tableMap;
    }

    public function startImport(bool $skipLoading = false)
    {
        if (!$skipLoading) {
            $this->clearTable();
            $this->clearWildberriesTable();
            $this->loadDataToTable();
            $this->loadWildberriesCards();
        }

        $this->import();
    }

    private function import()
    {
        $productsQuery = XlsxProductTable::getList([
            'select' => ['CARD_ID', 'TITLE', 'CATEGORY_NUMBER'],
            'group' => ['CARD_ID']
        ]);

        while ($product = $productsQuery->fetch()) {
            $offersInfo = $this->findOffers($product['CARD_ID']);
            $this->catalogHelper->productAndOffers($product, $offersInfo);
        }
    }

    private function findOffers(int $cardID)
    {
        $q = XlsxProductTable::getList([
            'select' => ['BARCODE', 'ARTICUL_WB', 'ARTICUL_OZON', 'SIZE', 'COLOR', 'PILLOWSLIP_SIZE', 'DESCRIPTION', 'IS_NEW', 'BEDSHEET_SIZE', 'BLANKET_SIZE', 'MODEL'],
            'filter' => ['CARD_ID' => $cardID]
        ]);

        return $q->fetchAll();
    }

    private function loadWildberriesCards()
    {
        $total = 100;
        $nmID = null;
        $updatedAt = null;
        while ($total === 100) {
            $response = $this->wildberriesClient->postContentV2GetCardsList(
                new ContentV2GetCardsListPostBody([
                    "settings" => [
                        "sort" => [
                            "ascending" => false
                        ],
                        "filter" => [
                            "textSearch" => "",
                            "allowedCategoriesOnly" => true,
                            "tagIDs" => [],
                            "objectIDs" => [],
                            "brands" => [],
                            "imtID" => 0,
                            "withPhoto" => -1
                        ],
                        "cursor" => [
                            "limit" => 100,
                            "nmID" => $nmID,
                            "updatedAt" => $updatedAt
                        ]
                    ]
                ])
            );

            $cursor = $response->getCursor();
            $total = $cursor->getTotal();
            $nmID = $cursor->getNmID();
            $updatedAt = $cursor->getUpdatedAt();

            $cards = $response->getCards();

            $cardsData = [];
            foreach ($cards as $card) {
                $photos = [];
                foreach ($card->getPhotos() as $photoItem) {
                    $photos[] = $photoItem->getBig();
                }
                $cardsData[] = [
                    'NM_ID' => $card->getNmID(),
                    'IMT_ID' => $card->getImtID(),
                    'PHOTOS' => json_encode($photos)
                ];
            }

            WildberriesCardTable::addMulti($cardsData);
        }
    }

    private function loadDataToTable()
    {
        while ($rows = $this->xlsxHelper->fetch()) {
            $rows = $this->prepareForSaving($rows);
            $this->saveRowsToTable($rows);
        }
    }

    private function prepareForSaving(array &$rows): array
    {
        foreach ($rows as $i => $row) {
            if ($row[2] == 'скоро выйдет') { // ARTICUL_WB
                $rows[$i][2] = null;
            }

            if ($row[3] == 'скоро выйдет') { // ARTICUL_OZON
                $rows[$i][3] = null;
            }
        }

        return $rows;
    }

    private function saveRowsToTable(array $rows)
    {
        array_walk($rows, fn(&$row) => $row = array_combine($this->tableMap, $row));
        $result = XlsxProductTable::addMulti($rows);

        if (!$result->isSuccess()) {
            throw new ImporterSaveRowsFailureException();
        }

        return true;
    }

    private function clearTable()
    {
        $table = XlsxProductTable::getTableName();
        Application::getConnection()->query("TRUNCATE TABLE {$table}");
    }

    private function clearWildberriesTable()
    {
        $table = WildberriesCardTable::getTableName();
        Application::getConnection()->query("TRUNCATE TABLE {$table}");
    }
}