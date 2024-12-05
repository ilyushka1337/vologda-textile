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

        $this->importProducts();
    }

    private function importProducts()
    {
        $q = XlsxProductTable::getList([
            'select' => ['CARD_ID', 'TITLE', 'CATEGORY_NUMBER'],
            'group' => ['CARD_ID']
        ]);

        while ($product = $q->fetch()) {
            $parentID = $this->catalogHelper->product($product);

            $this->importProductOffers($product['CARD_ID'], $parentID);
        }
    }

    private function importProductOffers(int $cardID, int $parentID)
    {
        $q = XlsxProductTable::getList([
            'select' => ['BARCODE', 'ARTICUL_WB', 'ARTICUL_OZON', 'SIZE', 'COLOR', 'PILLOWSLIP_SIZE', 'DESCRIPTION', 'IS_NEW', 'BEDSHEET_SIZE', 'BLANKET_SIZE'],
            'filter' => ['CARD_ID' => $cardID]
        ]);

        while ($offer = $q->fetch()) {
            $offerID = $this->catalogHelper->offer($offer, $parentID);
        }
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
                $cardsData[] = [
                    'NM_ID' => $card->getNmID(),
                    'IMT_ID' => $card->getImtID(),
                    'PHOTOS' => json_encode($card->getPhotos())
                ];
            }

            WildberriesCardTable::addMulti($cardsData);
        }
    }

    private function loadDataToTable()
    {
        while ($rows = $this->xlsxHelper->fetch()) {
            $this->saveRowsToTable($rows);
        }
    }

    private function saveRowsToTable(array $rows)
    {
        array_walk($rows, fn(&$row) => $row = array_combine($this->tableMap, $row));
        $result = XlsxProductTable::addMulti($rows);

        if (!$result->isSuccess()) {
            throw new ImporterSaveRowsFailureException('Failed to add rows to XlsxProductTable');
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