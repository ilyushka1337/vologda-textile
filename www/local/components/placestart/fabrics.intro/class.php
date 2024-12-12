<?php
namespace Placestart\Components;

use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;

class FabricsIntroSectionComponent extends Boilerplate
{
    protected static $name = "Ткани";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', '', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока')
        ]);
        return $params;
    }
}