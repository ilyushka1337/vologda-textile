<?php

namespace Placestart\Components;

use Bitrix\Iblock\Iblock;
use Bitrix\Main\Loader;
use Bitrix\Iblock\Elements\ElementSeotextsTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class SeoSectionComponent extends Boilerplate
{
    protected static $name = "Текстовый блок";

    protected function getData()
    {
        $q = ElementSeotextsTable::getList([
            'select' => ['NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE'],
            'filter' => ['CODE' => $this->arParams['ELEMENT_CODE']]
        ]);

        $seoText = $q->fetchObject();

        $this->arResult = [
            'TITLE' => $seoText->getName(),
            'TEXT' => $seoText->getPreviewText(),
            'IMG' => Utils::resizeImage($seoText->getPreviewPicture(), 800, 524, 'proportional')
        ];
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            'ELEMENT_CODE' => $params->string('Символьный код элемента'),
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
            'IMG_POSITION' => $params->list('Расположение изображения', [
                'left' => 'Слева',
                'right' => 'Справа'
            ])
        ]);

        return $params;
    }
}
