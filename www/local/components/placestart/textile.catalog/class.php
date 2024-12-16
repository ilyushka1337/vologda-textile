<?php

namespace Placestart\Components;

use Bitrix\Iblock\Iblock;
use Bitrix\Main\Loader;
use Bitrix\Iblock\Elements\ElementSeotextsTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class TextileCatalogComponent extends Boilerplate
{
    protected static $name = "Каталог тканей";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', 'Параметры', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока'),
        ]);

        return $params;
    }
}
