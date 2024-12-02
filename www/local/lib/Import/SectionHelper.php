<?
namespace Placestart\Import;

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
        9 => 'khalaty',
        10 => 'polotentsa-bannye',
        11 => 'kilt-zhenskiy',
        12 => 'kilt-muzhskoy',
        13 => 'poltentsa-plyazhnye',
        14 => 'prostyn-vafelnaya',
        15 => 'komplekt-dlya-sauny',
        16 => 'detskie-khalaty',
        17 => 'detskie-polotentsa-ugolki'
    ];

    function __construct(
        private int $iblockID
    ) {
        Loader::requireModule('iblock');
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