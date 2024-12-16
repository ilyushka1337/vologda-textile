<?
namespace Placestart\Import;

use Bitrix\Iblock\Elements\ElementCatalogTable;
use Bitrix\Iblock\IblockTable;
use Bitrix\Iblock\Model\Section;
use Bitrix\Main\Loader;
use Bitrix\Iblock\SectionTable;

class SectionHelper
{
    private array $sectionsMap = [
        1 => 'komplekt-postelnogo-belya',
        2 => 'prostyni',
        3 => 'navolochki',
        4 => 'pododeyalniki',
        5 => 'pokryvala',
        6 => 'skaterti',
        7 => 'polotentsa',
        8 => 'pledy',
        10 => 'polotentse-vafelnoe-bokho',
        11 => 'polotentse-vafelnoe',
        12 => 'prostyn-bannaya',
        13 => 'poltentsa-plyazhnye',
        14 => 'zhenskiy-kilt',
        16 => 'muzhskoy-kilt',
        18 => 'nabory-dlya-spa',
        19 => 'detskie-khalaty',
        20 => 'detskie-polotentsa-ugolki',
        92 => 'zhenskiy-khalat',
        93 => 'muzhskoy-khalat',
    ];

    private int $iblockID;

    function __construct()
    {
        Loader::requireModule('iblock');

        $this->iblockID = ElementCatalogTable::getEntity()->getIblock()->getId();
    }

    function get(int $sectionNumber): int
    {
        if (!isset($this->sectionsMap[$sectionNumber])) {
            throw new Exception\SectionNotExistsException("Section $sectionNumber does not exist");
        }

        $q = SectionTable::getList([
            'select' => ['ID'],
            'filter' => [
                'CODE' => $this->sectionsMap[$sectionNumber],
                'IBLOCK_ID' => $this->iblockID
            ],
            'limit' => 1
        ]);

        if (!$row = $q->fetch()) {
            throw new Exception\SectionNotFoundException("Section $sectionNumber not found");
        }

        return $row['ID'];
    }
}