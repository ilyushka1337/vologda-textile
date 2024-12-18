<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class PageHeadComponent extends Boilerplate
{
    protected static $name = "Шапка страницы";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        return $params;
    }

    public function executeComponent()
    {
        $this->includeComponentTemplate();
    }
}