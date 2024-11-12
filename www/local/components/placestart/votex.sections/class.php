<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

class VotextSectionsComponent extends Boilerplate
{
    protected static $name = "Разделы каталога";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        return $params;
    }
}