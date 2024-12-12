<?
namespace Placestart\Import\Exception;

class ImporterSaveRowsFailureException extends \Exception
{
    public function __construct(int $code = 0, \Throwable $previous = null)
    {
        parent::__construct('Failed to add rows to XlsxProductTable', $code, $previous);
    }
}