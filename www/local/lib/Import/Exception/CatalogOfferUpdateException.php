<?
namespace Placestart\Import\Exception;

class CatalogOfferUpdateException extends \Exception
{
    public function __construct(int $productID, string $barcode, int $code = 0, \Throwable $previous = null)
    {
        $message = "Failed to update offer: ID = $productID; barcode = $barcode";
        parent::__construct($message, $code, $previous);
    }
}