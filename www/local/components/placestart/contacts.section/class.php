<?php
namespace Placestart\Components;

use Bitrix\Main\Loader;
use Placestart\Core\Component\Boilerplate;
use Placestart\Core\Component\Parameters;
use Placestart\Core\Utils;

class ContactsSectionComponent extends Boilerplate
{
    protected static $name = "Контакты";

    public function __construct(\CBitrixComponent $component = null)
    {
        Loader::requireModule('sprint.options');
        parent::__construct($component);
    }

    protected function getData()
    {
        $this->arResult['SITE_PRODUCTION_ADDRESS'] = sprint_options_get('SITE_PRODUCTION_ADDRESS');
        $this->arResult['SITE_STORE_ADDRESS'] = sprint_options_get('SITE_STORE_ADDRESS');
        $this->arResult['SITE_STORE_PHONE'] = sprint_options_get('SITE_STORE_PHONE');
        $this->arResult['SITE_STORE_WORK_HOURS'] = sprint_options_get('SITE_STORE_WORK_HOURS');
        $this->arResult['SITE_WORK_HOURS'] = sprint_options_get('SITE_WORK_HOURS');
        $this->arResult['SITE_PHONE'] = sprint_options_get('SITE_PHONE');
        $this->arResult['SITE_EMAIL'] = sprint_options_get('SITE_EMAIL');
    }

    public static function getComponentParameters(): Parameters
    {
        $params = new Parameters();
        $params->group('DATA', '', 100, [
            'IS_PAGE_BLOCK' => $params->checkbox('Добавить отступы блока')
        ]);
        return $params;
    }
}