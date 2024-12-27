<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementSeotextsTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class TextsBlockComponent extends Boilerplate
{
    protected static $name = "Тексты";

    protected function getData()
    {
        if (!$this->arParams['ELEMENT_CODES'] || count($this->arParams['ELEMENT_CODES']) === 0)
            return;

        $q = ElementSeotextsTable::getList([
            'select' => ['NAME', 'PREVIEW_TEXT'],
            'filter' => [
                'CODE' => $this->arParams['ELEMENT_CODES']
            ]
        ]);

        $this->arResult['ELEMENS'] = [];
        while ($element = $q->fetch()){
            $this->arResult['ELEMENS'][] = $element;
        }
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
            'ELEMENT_CODES' => $params->string('Символьный код текста', [
                'MULTIPLE' => 'Y'
            ])
        ]);

        return $params;
    }
}
