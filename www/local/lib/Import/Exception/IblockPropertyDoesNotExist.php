<?
namespace Placestart\Import\Exception;

class IblockPropertyDoesNotExist extends \Exception
{
    function __construct(int $iblockID, string $propertyCode, int $code = 0, \Throwable $previous = null)
    {
        $message = "Property $propertyCode does not exist in iblock $iblockID";
        parent::__construct($message, $code, $previous);
    }
}