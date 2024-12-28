<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;
use Bitrix\Iblock\Elements\ElementTextpagesTable;

class AboutSectionComponent extends Boilerplate
{
    protected static $name = "О нас";

    protected function getData()
    {
        $this->arResult = [
            'ABOUT' => [],
            'PRODUCTION' => [],
            'PARTNERSHIP' => []
        ];

        $q = ElementTextpagesTable::getList([
            'select' => ['ID', 'NAME', 'CODE', 'PREVIEW_PICTURE'],
            'filter' => [
                'CODE' => [
                    $this->arParams['ABOUT_ELEMENT_CODE'],
                    $this->arParams['PRODUCTION_ELEMENT_CODE'],
                    $this->arParams['PARTNERSHIP_ELEMENT_CODE'],
                ]
            ]
        ]);

        while ($element = $q->fetch()) {
            $this->arResult['ELEMENTS'][] = [
                'ID' => $element['ID'],
                'NAME' => $element['NAME'],
                'CODE' => $element['CODE'],
                'PICTURE' => Utils::resizeImage($element['PREVIEW_PICTURE'], 595, 595)
            ];
        }
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', '', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
            'ABOUT_ELEMENT_CODE' => $params->string('Символьный код текста "О комбинате"'),
            'PRODUCTION_ELEMENT_CODE' => $params->string('Символьный код текста "Производство"'),
            'PARTNERSHIP_ELEMENT_CODE' => $params->string('Символьный код текста "Партнерам"'),
            'TITLE' => $params->string('Заголовок')
        ]);
        return $params;
    }
}