<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

Loader::includeModule('placestart.core');

final class PrivacyPolicyComponent extends Boilerplate
{
    protected static $name = "Политика конфиденциальности";

    protected static $group = "pages";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group("DATA", "Параметры", 100, [
            "COMPANY" => $params->string("Название компании"),
            "ADDRESS" => $params->string("Юридический адрес"),
        ]);

        return $params;
    }
}