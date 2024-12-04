<?
namespace Placestart\Import\Exception;

class CatalogProductUpdateException extends \Exception
{
    public function __construct(int $productID, string $cardID, int $code = 0, \Throwable $previous = null)
    {
        $message = "Failed to update product: ID = $productID; cardID = $cardID";
        parent::__construct($message, $code, $previous);
    }
}