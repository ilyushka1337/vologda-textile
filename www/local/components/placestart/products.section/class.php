<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

class ProductsSectionComponent extends Boilerplate
{
    protected static $name = "Товары";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            'TITLE' => $params->string('Заголовок'),
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока')
        ]);
        return $params;
    }
}