<?
namespace Placestart\Import\Exception;

class WildberriesArticulNotSetException extends \Exception
{
    function __construct(int $code = 0, \Throwable $previous = null)
    {
        $message = "Required wildberries articul not set";
        parent::__construct($message, $code, $previous);
    }
}