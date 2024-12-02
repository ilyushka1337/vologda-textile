<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementTextpagesTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

final class TextPageComponent extends Boilerplate
{
    protected static $name = "Текстовая страница";

    protected static $group = "pages";

    protected function getData()
    {
        $q = ElementTextpagesTable::getList([
            'select' => ['ID'],
            'filter' => ['CODE' => $this->arParams['ELEMENT_CODE']]
        ]);

        if ($elem = $q->fetchObject()) {
            $this->arResult['ELEMENT_ID'] = $elem->getId();
        }
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group("DATA", "Параметры", 100, [
            "ELEMENT_CODE" => $params->string("Символьный код элемента"),
            "CONTENT_PROPERTY_CODE" => $params->string("Код свойства с контентом", [
                'DEFAULT' => 'CONTENT'
            ])
        ]);

        return $params;
    }
}