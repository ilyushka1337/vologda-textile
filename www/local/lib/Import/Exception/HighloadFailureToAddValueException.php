<?
namespace Placestart\Import\Exception;

class HighloadFailureToAddValueException extends \Exception
{
    public function __construct(string $tableName, string $value, int $code = 0, \Throwable $previous = null)
    {
        $message = "Failed to add value $value to highload block $tableName";
        parent::__construct($message, $code, $previous);
    }
}