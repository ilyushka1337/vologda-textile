<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementSeotextsTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class PartnershipAdvantagesComponent extends Boilerplate
{
    protected static $name = "Преимущества сотрудничества";

    protected function getData()
    {
        if (!$this->arParams['ELEMENT_CODES'] || count($this->arParams['ELEMENT_CODES']) === 0)
            return;

        $q = ElementSeotextsTable::getList([
            'select' => ['NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE'],
            'filter' => [
                'CODE' => $this->arParams['ELEMENT_CODES']
            ]
        ]);

        $this->arResult['ELEMENTS'] = [];
        while ($element = $q->fetch()) {
            $this->arResult['ELEMENTS'][] = [
                'TEXT' => $element['PREVIEW_TEXT'],
                'PICTURE' => Utils::resizeImage($element['PREVIEW_PICTURE'], 200, 183, 'proportional')
            ];
        }
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
            'TITLE' => $params->string('Заголовок'),
            'ELEMENT_CODES' => $params->string('Символьный код текста', [
                'MULTIPLE' => 'Y'
            ])
        ]);
        return $params;
    }
}