<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

Loader::includeModule('placestart.core');

final class TextPageComponent extends Boilerplate
{
    protected static $name = "Текстовая страница";

    protected static $group = "pages";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group("DATA", "Параметры", 100, [
            "IBLOCK_ID" => $params->iblock("ID инфоблока"),
            "ELEMENT_ID" => $params->string("ID элемента"),
            "CONTENT_PROPERTY_CODE" => $params->string("Код свойства с контентом", [
                'DEFAULT' => 'CONTENT'
            ])
        ]);

        return $params;
    }
}