<?
namespace Placestart\Import;

use PhpOffice\PhpSpreadsheet\Worksheet\CellIterator;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use Placestart\Import\Entity\XlsxProductTable;

class XlsxHelper
{
    private array $xlsxMap;

    private int $currentIndex = 1;

    private array $rows = [];

    function __construct(
        private string $filePath,
        private int $pageSize = 50
    ) {
        $tableMap = array_map(fn($field) => $field->getName(), XlsxProductTable::getMap());
        array_shift($tableMap);

        $columnIndexes = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N'];
        $this->xlsxMap = array_combine($columnIndexes, $tableMap);
    }

    function fetch(): array|null
    {
        $spreadsheet = (IOFactory::createReader('Xlsx'))
            ->setReadDataOnly(true)
            ->load($this->filePath);
        $spreadsheet->setActiveSheetIndex(0);
        $worksheet = $spreadsheet->getActiveSheet();

        $rowIterator = $worksheet->getRowIterator($this->currentIndex + 1);
        $this->rows = [];

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

                $this->rows[] = $cells;
            }

            if ($isEmpty || count($this->rows) % $this->pageSize === 0)
                break;
        }

        $this->currentIndex = $rowIterator->key();

        return count($this->rows) > 0 ? $this->rows : null;
    }
}