<?
namespace Placestart\Import\Exception;

class CatalogProductDeactivateException extends \Exception
{
    public function __construct(int $productID, int $code = 0, \Throwable $previous = null)
    {
        $message = "Failed to deactivate product: ID = $productID";
        parent::__construct($message, $code, $previous);
    }
}