<?php

namespace Sprint\Migration;

use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option;
use Sprint\Options\Module;

class SiteContacts20241212111716 extends Version
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
        $helper = $this->getHelperManager();

        Option::set(
            Module::getModuleName(),
            'SITE_VK',
            'https://vk.com/'
        );

        Option::set(
            Module::getModuleName(),
            'SITE_TELEGRAM',
            'http://web.telegram.org/'
        );

        Option::set(
            Module::getModuleName(),
            'SITE_OK',
            'https://ok.ru/'
        );

        Option::set(
            Module::getModuleName(),
            'SITE_YOUTUBE',
            'https://www.youtube.com/'
        );
    }
}
