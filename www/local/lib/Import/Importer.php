<?
namespace Placestart\Import;

use Bitrix\Main\Application;
use Bitrix\Main\Entity\AddResult;
use Placestart\Import\Entity\XlsxProductTable;
use Placestart\Import\Exception\ImporterSaveRowsFailureException;

class Importer
{
    private array $tableMap;

    function __construct(
        private string $uploadsPath,
        private XlsxHelper $xlsxHelper,
        private CatalogHelper $catalogHelper
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
            $this->loadDataToTable();
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
            $result = $this->catalogHelper->product($product);

            $offersQuery = XlsxProductTable::getList([
                'select' => ['BARCODE', 'ARTICUL_WB', 'ARTICUL_OZON', 'SIZE', 'PILLOWSLIP_SIZE', 'TITLE', 'IS_NEW', 'BEDSHEET_SIZE', 'BLANKET_SIZE'],
                'filter' => ['CARD_ID' => $product['CARD_ID']]
            ]);
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
}