<?
namespace Placestart\Import\Exception;

class IblockPropertyIsNotDirectory extends \Exception
{
    function __construct(int $iblockID, string $propertyCode, int $code = 0, \Throwable $previous = null)
    {
        $message = "Property $propertyCode is not of type directory";
        parent::__construct($message, $code, $previous);
    }
}