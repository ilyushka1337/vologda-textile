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
        1 => 'komplekt-postelnogo-belya-section',
        2 => 'prostyni-section',
        3 => 'navolochki-section',
        4 => 'pododeyalniki-section',
        5 => 'pokryvala-section',
        6 => 'skaterti-section',
        7 => 'polotentsa-section',
        8 => 'pledy-section',
        10 => 'polotentse-vafelnoe-bokho-section',
        11 => 'polotentse-vafelnoe-section',
        12 => 'prostyn-bannaya-section',
        13 => 'poltentsa-plyazhnye-section',
        14 => 'zhenskiy-kilt-section',
        16 => 'muzhskoy-kilt-section',
        18 => 'nabory-dlya-spa-section',
        19 => 'detskie-khalaty-section',
        20 => 'detskie-polotentsa-ugolki-section',
        92 => 'zhenskiy-khalat-section',
        93 => 'muzhskoy-khalat-section',
        404 => 'new'
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