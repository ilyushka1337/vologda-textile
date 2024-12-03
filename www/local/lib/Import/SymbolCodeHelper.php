<?
namespace Placestart\Import;

use Placestart\Import\Exception;
use Bitrix\Main\Loader;

class SymbolCodeHelper
{
    function __construct()
    {
        Loader::requireModule(moduleName: 'iblock');
    }

    public function createElementCode(string $name, int $iblockID, int $ID)
    {
        $el = new \CIBlockElement;
        $code = $el->createMnemonicCode([
            'NAME' => $name,
            'IBLOCK_ID' => $iblockID,
            'ID' => $ID
        ]);

        if (!$code) {
            throw new Exception\ElementCodeCreateException($ID, $iblockID);
        }

        return $code;
    }

    public function setElementCode(string $name, int $iblockID, int $ID): int
    {
        $el = new \CIBlockElement;

        $productID = $el->Update($ID, [
            'CODE' => $this->createElementCode($name, $iblockID, $ID)
        ]);

        if (!$productID > 0) {
            throw new Exception\ElementCodeSetException($el->getLastError(), $info['CARD_ID']);
        }

        return $productID;
    }
}