<?
namespace Placestart\Import;

use Bitrix\Highloadblock\HighloadBlockTable;
use Bitrix\Main\ORM\Data\DataManager;
use Placestart\Import\Exception;
use Bitrix\Iblock\Elements\ElementCatalogTable;
use Bitrix\Main\Loader;
use Bitrix\Main\ORM\Entity;
use Bitrix\Iblock\PropertyTable;

class HighloadHelper
{
    readonly private DataManager|string $dataManager;

    readonly private Entity $highloadEntity;

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

        $prop = $q->fetch();

        if (!$prop) {
            throw new Exception\IblockPropertyDoesNotExist($this->iblockID, $this->propertyCode);
        }

        if ($prop['USER_TYPE'] !== PropertyTable::USER_TYPE_DIRECTORY) {
            throw new Exception\IblockPropertyIsNotDirectory($this->iblockID, $this->propertyCode);
        }

        $userTypeSettings = unserialize($prop['USER_TYPE_SETTINGS']);
        $arHighloadBlock = HighloadBlockTable::getList([
            'filter' => [
                'TABLE_NAME' => $userTypeSettings['TABLE_NAME']
            ]
        ])->fetch();

        if (!$arHighloadBlock) {
            throw new Exception\HighloadBlockDoesNotExist($userTypeSettings['TABLE_NAME']);
        }

        $this->highloadEntity = HighloadBlockTable::compileEntity($arHighloadBlock);
        $this->dataManager = $this->highloadEntity->getDataClass();
    }

    public function value(string $value): int
    {
        $q = $this->dataManager::getList([
            'select' => ['ID'],
            'filter' => ['UF_XML_ID' => $value],
            'limit' => 1
        ]);

        if ($propValue = $q->fetch()) {
            return $propValue['ID'];
        } else {
            $addResult = $this->dataManager::add([
                'UF_NAME' => $value,
                'UF_XML_ID' => $value,
                'UF_SORT' => 100,
                'UF_FILE' => '',
                'UF_LINK' => '',
            ]);

            if (!$addResult->isSuccess()) {
                throw new Exception\HighloadFailureToAddValueException($value, $this->highloadEntity->getDBTableName());
            }

            return $addResult->getId();
        }
    }
}