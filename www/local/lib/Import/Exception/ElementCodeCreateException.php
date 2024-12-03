<?
namespace Placestart\Import\Exception;

class ElementCodeCreateException extends \Exception
{
    public function __construct(int $productID, int $iblockID, int $code = 0, \Throwable $previous = null)
    {
        $message = "Failed to create element code: ID = $productID; iblockID = $iblockID";
        parent::__construct($message, $code, $previous);
    }
}