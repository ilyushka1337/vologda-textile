<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

class MainDirectionsComponent extends Boilerplate
{
    protected static $name = "Основные направления";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        return $params;
    }
}