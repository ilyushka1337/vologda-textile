<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

Loader::includeModule('placestart.core');

class ContactsSectionComponent extends Boilerplate
{
    protected static $name = "Контакты";

    protected function getData()
    {
        $this->arResult = Utils::getContacts();
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            'CITY' => $params->string('Город')
        ]);
        return $params;
    }
}