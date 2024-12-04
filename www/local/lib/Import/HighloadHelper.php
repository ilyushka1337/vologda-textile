<?
namespace Placestart\Import;

use Bitrix\Highloadblock\HighloadBlockTable;
use Placestart\Import\Exception;
use Bitrix\Iblock\Elements\ElementCatalogTable;
use Bitrix\Main\Loader;
use Bitrix\Iblock\PropertyTable;

class HighloadHelper
{
    function __construct(
        readonly private int $iblockID,
        readonly private string $propertyCode
    ) {
        Loader::requireModule(moduleName: 'iblock');
        Loader::requireModule(moduleName: 'highloadblock');

        $q = PropertyTable::getList([
            'select' => ['IBLOCK_ID', 'USER_TYPE', 'USER_TYPE_SETTINGS'],
            'filter' => ['IBLOCK_ID' => $this->iblockID, 'CODE' => $this->propertyCode],
            'limit' => 1
        ]);

        $prop = $q->fetchObject();

        if (!$prop) {
            throw new Exception\IblockPropertyDoesNotExist($this->iblockID, $this->propertyCode);
        }

        if ($prop['USER_TYPE'] !== PropertyTable::USER_TYPE_DIRECTORY) {
            throw new Exception\IblockPropertyIsNotDirectory($this->iblockID, $this->propertyCode);
        }

        dump($prop['USER_TYPE_SETTINGS']);
    }

    private function createEntity(string $tableName)
    {
        $arHighloadBlock = HighloadBlockTable::getById($this->iblockID)->fetch();
    }
}