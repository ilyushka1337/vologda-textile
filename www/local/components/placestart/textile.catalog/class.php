<?php

namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementTextileTable;
use Bitrix\Iblock\Iblock;
use Bitrix\Iblock\Model\Section;
use Bitrix\Iblock\SectionTable;
use Bitrix\Main\Loader;
use Bitrix\Iblock\Elements\ElementSeotextsTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class TextileCatalogComponent extends Boilerplate
{
    protected static $name = "Каталог тканей";

    protected function getData()
    {
        $textileIblockId = ElementTextileTable::getEntity()->getIblock()->getId();

        $sectionsQuery = SectionTable::getList([
            'select' => ['NAME', 'PICTURE', 'DESCRIPTION', 'ID'],
            'filter' => [
                'IBLOCK_ID' => $textileIblockId,
                'DEPTH_LEVEL' => 1
            ],
            'limit' => 50
        ]);

        $sections = [];
        while ($section = $sectionsQuery->fetchObject()) {
            $sections[$section->getId()] = [
                'ELEMENTS' => [],
                'NAME' => $section->getName(),
                'DESCRIPTION' => $section->getDescription(),
                'PICTURE' => Utils::resizeImage($section->getPicture(), 295, 295)
            ];
        }

        if (count($sections) > 0) {
            $elementsQuery = ElementTextileTable::getList([
                'select' => ['IBLOCK_SECTION_ID', 'NAME', 'PREVIEW_PICTURE'],
                'filter' => ['IBLOCK_SECTION_ID' => array_keys($sections)],
            ]);

            while ($element = $elementsQuery->fetchObject()) {
                $sections[$element->getIblockSectionId()]['ELEMENTS'][] = [
                    'NAME' => $element->getName(),
                    'PICTURE' => Utils::resizeImage($element->getPreviewPicture(), 155, 72)
                ];
            }
        }


        $this->arResult['SECTIONS'] = $sections;
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
        ]);

        return $params;
    }
}
