<?
namespace Placestart\Import\Exception;

class CatalogProductCreateException extends \Exception
{
    public function __construct(string $cardID, int $code = 0, \Throwable $previous = null)
    {
        $message = "Failed to create product: cardID = $cardID";
        parent::__construct($message, $code, $previous);
    }
}