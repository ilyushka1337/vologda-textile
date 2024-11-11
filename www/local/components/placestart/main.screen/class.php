<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

Loader::includeModule('placestart.core');

class MainScreenComponent extends Boilerplate
{
    protected static $name = "Главный экран";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            'TITLE' => $params->string('Заголовок'),
        ]);

        return $params;
    }
}