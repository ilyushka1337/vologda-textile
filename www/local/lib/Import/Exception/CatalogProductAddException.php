<?
namespace Placestart\Import\Exception;

class CatalogProductAddException extends \Exception
{
    public function __construct(int $productID, string $type, int $code = 0, \Throwable $previous = null)
    {
        $message = "Failed to add product: cardID = $productID, type = $type";
        parent::__construct($message, $code, $previous);
    }
}