<?php

namespace Placestart\Components;

use Bitrix\Iblock\Iblock;
use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

Loader::includeModule('placestart.core');

class SeoSectionComponent extends Boilerplate
{
    protected static $name = "Текстовый блок";

    protected function getData()
    {
        $seotextsIblock = Iblock::wakeUp(Utils::locateIblock('seotexts'));
        $q = $seotextsIblock->getEntityDataClass()::query()
            ->setSelect(['NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE'])
            ->setFilter(['ID' => $this->arParams['ELEMENT_ID']]);

        /**
         * @var \Bitrix\Iblock\Elements\EO_ElementSeotexts $seoText
         */
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
            'IBLOCK_ID' => $params->iblock('Инфоблок с текстами'),
            'ELEMENT_ID' => $params->string('ID элемента'),
            'IS_PAGE_BLOCK' => $params->yesNo('Добавить отступы блока')
        ]);

        return $params;
    }
}
