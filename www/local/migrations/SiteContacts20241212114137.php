<?php

namespace Sprint\Migration;

use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option;
use Sprint\Options\Module;
class SiteContacts20241212114137 extends Version
{
    protected $author = "admin";

    protected $description = "обновление контактов";

    protected $moduleVersion = "4.15.1";

    function __construct()
    {
        Loader::requireModule('sprint.options');
    }

    public function up()
    {
        Option::set(
            Module::getModuleName(),
            'SITE_WILDBERRIES',
            'https://wildberries.ru/'
        );

        Option::set(
            Module::getModuleName(),
            'SITE_OZON',
            'https://ozon.ru/'
        );
    }
}
