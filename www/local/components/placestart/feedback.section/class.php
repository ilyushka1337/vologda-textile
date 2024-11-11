<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

Loader::includeModule('placestart.core');

class FeedbackSectionComponent extends Boilerplate
{
    protected static $name = "Форма обратной связи";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();

        return $params;
    }
}