<?php
namespace Placestart\Components;

use Bitrix\Iblock\Elements\ElementVacanciesTable;
use Bitrix\Iblock\IblockTable;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class VotexPremiumComponent extends Boilerplate
{
    protected static $name = "Votex Premium";

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', '', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока')
        ]);
        return $params;
    }
}