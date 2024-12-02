<?
namespace Placestart\Import;

use Bitrix\Main\Application;
use Bitrix\Main\Entity\AddResult;
use PhpOffice\PhpSpreadsheet\Worksheet\CellIterator;
use Placestart\Import\Entity\XlsxProductTable;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Placestart\Import\Exception\ImporterSaveRowsFailureException;

class Importer
{
    private array $tableMap;

    private array $xlsxMap;

    private array $sectionsMap = [
        1 => 'komplekt-postelnogo-belya',
        2 => 'prostyni',
        3 => 'navolochki',
        4 => 'pododeyalniki',
        5 => 'pokryvala',
        6 => 'skaterti',
        7 => 'polotentsa',
        8 => 'pledy',
        9 => 'khalaty',
        10 => 'polotentsa-bannye',
        11 => 'kilt-zhenskiy',
        12 => 'kilt-muzhskoy',
        13 => 'poltentsa-plyazhnye',
        14 => 'prostyn-vafelnaya',
        15 => 'komplekt-dlya-sauny',
        16 => 'detskie-khalaty',
        17 => 'detskie-polotentsa-ugolki'
    ];

    function __construct(
        private string $filePath,
        private string $uploadsPath
    ) {
        /** @var \Bitrix\Main\ORM\Fields\ScalarField $field */
        $tableMap = array_map(fn($field) => $field->getName(), XlsxProductTable::getMap());
        array_shift($tableMap);
        $this->tableMap = $tableMap;

        $columnIndexes = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N'];
        $this->xlsxMap = array_combine($columnIndexes, $tableMap);
    }

    public function startImport()
    {
        $this->clearTable();
        $this->loadDataToTable();
    }

    private function loadDataToTable()
    {
        $spreadsheet = (IOFactory::createReader('Xlsx'))
            ->setReadDataOnly(true)
            ->load($this->filePath);
        $spreadsheet->setActiveSheetIndex(0);
        $worksheet = $spreadsheet->getActiveSheet();

        $rowIterator = $worksheet->getRowIterator(2);
        $rows = [];
        foreach ($rowIterator as $row) {
            $cellIterator = $row->getCellIterator();
            $cells = [];
            $isEmpty = $row->isEmpty(CellIterator::TREAT_EMPTY_STRING_AS_EMPTY_CELL | CellIterator::TREAT_NULL_VALUE_AS_EMPTY_CELL);

            if (!$isEmpty) {
                foreach ($cellIterator as $columnIndex => $cell) {
                    switch ($this->xlsxMap[$columnIndex]) {
                        case 'IS_NEW':
                            $value = $cell->getValue();
                            if ($value == 1) {
                                $cells[] = 'Y';
                            } else {
                                $cells[] = 'N';
                            }

                            break;
                        default:
                            $cells[] = $cell->getValue();
                            break;
                    }

                    if ($columnIndex == "N")
                        break;
                }

                $rows[] = $cells;
            }
            if ($isEmpty || count($rows) % 50 == 0) {
                $this->saveRowsToTable($rows);
                $rows = [];
            }

            if ($isEmpty)
                break;
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

    public function clearTable()
    {
        $table = XlsxProductTable::getTableName();
        Application::getConnection()->query("TRUNCATE TABLE {$table}");
    }
}