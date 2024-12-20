<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

class NewSectionComponent extends Boilerplate
{
    protected static $name = "Новинки";

    protected function getData()
    {
        $GLOBALS['newFilter'] = [
            'OFFERS' => [
                'PROPERTY_IS_NEW_VALUE' => 'Да'
            ]
        ];
    }

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