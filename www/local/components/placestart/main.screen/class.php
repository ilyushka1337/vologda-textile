<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

class MainScreenComponent extends Boilerplate
{
    protected static $name = "Главный экран";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        return $params;
    }
}