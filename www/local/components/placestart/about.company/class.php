<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Bitrix\Iblock\Elements\ElementSeotextsTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class AboutCompanyComponent extends Boilerplate
{
    protected static $name = "О комбинате";

    protected function getData()
    {
        $q = ElementSeotextsTable::getList([
            'select' => ['PREVIEW_TEXT', 'PREVIEW_PICTURE'],
            'filter' => ['CODE' => $this->arParams['ELEMENT_CODE']]
        ]);

        $seoText = $q->fetchObject();

        if (!$seoText) {
            return;
        }

        $this->arResult = [
            'TEXT' => $seoText->getPreviewText(),
            'IMG' => Utils::resizeImage($seoText->getPreviewPicture(), 1000, 900, 'proportional')
        ];
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', '', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
            'ELEMENT_CODE' => $params->string('Символьный код текста'),
        ]);
        return $params;
    }
}