<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Bitrix\Iblock\Elements\ElementSeotextsTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class AboutBrandComponent extends Boilerplate
{
    protected static $name = "О бренде";

    protected function getData()
    {
        $q = ElementSeotextsTable::getList([
            'select' => ['CODE', 'PREVIEW_TEXT'],
            'filter' => [
                'CODE' => [
                    $this->arParams['TEXT_1_CODE'],
                    $this->arParams['TEXT_2_CODE'],
                    $this->arParams['TEXT_3_CODE']
                ]
            ]
        ]);


        while ($element = $q->fetch()) {
            if ($element['CODE'] == $this->arParams['TEXT_1_CODE']) {
                $this->arResult['TEXT_1'] = $element['PREVIEW_TEXT'];
            }
            if ($element['CODE'] == $this->arParams['TEXT_2_CODE']) {
                $this->arResult['TEXT_2'] = $element['PREVIEW_TEXT'];
            }
            if ($element['CODE'] == $this->arParams['TEXT_3_CODE']) {
                $this->arResult['TEXT_3'] = $element['PREVIEW_TEXT'];
            }
        }
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', '', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
            'TEXT_1_CODE' => $params->string('Символьный код первого текста'),
            'TEXT_2_CODE' => $params->string('Символьный код второго текста'),
            'TEXT_3_CODE' => $params->string('Символьный код третьего текста')
        ]);
        return $params;
    }
}