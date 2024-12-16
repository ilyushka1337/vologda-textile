<?
namespace Placestart\Import;

use PhpOffice\PhpSpreadsheet\Worksheet\CellIterator;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use PhpOffice\PhpSpreadsheet\Exception as PhpSpreadsheetException;
use Placestart\Import\Entity\XlsxProductTable;

class XlsxHelper
{

    private int $currentIndex = 1;

    private Worksheet $worksheet;

    private array $rows = [];

    function __construct(
        private string $filePath,
        private int $pageSize = 50
    ) {
        $spreadsheet = (IOFactory::createReader('Xlsx'))
            ->setReadDataOnly(true)
            ->load($this->filePath);
        $spreadsheet->setActiveSheetIndex(0);
        $this->worksheet = $spreadsheet->getActiveSheet();
    }

    function fetch(): array|null
    {
        try {
            $rowIterator = $this->worksheet->getRowIterator($this->currentIndex + 1);
        } catch (PhpSpreadsheetException $e) {
            return null;
        }
        $this->rows = [];

        foreach ($rowIterator as $row) {
            $cellIterator = $row->getCellIterator();
            $cells = [];
            $isEmpty = $row->isEmpty(CellIterator::TREAT_EMPTY_STRING_AS_EMPTY_CELL | CellIterator::TREAT_NULL_VALUE_AS_EMPTY_CELL);

            if (!$isEmpty) {
                foreach ($cellIterator as $columnIndex => $cell) {
                    switch ($columnIndex) {
                        case 'J': // IS_NEW
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