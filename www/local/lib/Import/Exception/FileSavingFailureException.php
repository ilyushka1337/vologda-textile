<?
namespace Placestart\Import\Exception;

class FileSavingFailureException extends \Exception
{
    public function __construct(string $fileName, int $code = 0, \Throwable $previous = null)
    {
        $message = "Failed to save file: $fileName";
        parent::__construct($message, $code, $previous);
    }
}