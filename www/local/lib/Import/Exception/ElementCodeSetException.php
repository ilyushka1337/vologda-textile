<?
namespace Placestart\Import\Exception;

class ElementCodeSetException extends \Exception
{
    public function __construct(string $productID, int $iblockID, int $code = 0, \Throwable $previous = null)
    {
        $message = "Failed to set element code: ID = $productID; iblockID = $iblockID";
        parent::__construct($message, $code, $previous);
    }
}