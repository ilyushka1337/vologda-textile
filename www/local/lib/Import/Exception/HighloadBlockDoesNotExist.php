<?
namespace Placestart\Import\Exception;

class HighloadBlockDoesNotExist extends \Exception
{
    public function __construct(string $tableName, int $code = 0, \Throwable $previous = null)
    {
        $message = "Highloadblock does not exist: table = $tableName";
        parent::__construct($message, $code, $previous);
    }
}