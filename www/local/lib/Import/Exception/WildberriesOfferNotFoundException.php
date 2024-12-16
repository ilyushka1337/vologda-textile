<?
namespace Placestart\Import\Exception;

class WildberriesOfferNotFoundException extends \Exception
{
    function __construct(string $articulWB, int $code = 0, \Throwable $previous = null)
    {
        $message = "Wildberries offer $articulWB not found";
        parent::__construct($message, $code, $previous);
    }
}