<?
namespace Placestart\Import\Exception;

class CatalogOfferDeactivateException extends \Exception
{
    public function __construct(int $offerID, int $code = 0, \Throwable $previous = null)
    {
        $message = "Failed to deactivate offer: ID = $offerID";
        parent::__construct($message, $code, $previous);
    }
}