<?php

namespace Sprint\Migration;

use Bitrix\Main\Loader;
use Bitrix\Main\Config\Option;
use Sprint\Options\Module;

Loader::includeModule('sprint.options');


class SiteContacts20241118115547 extends Version
{
    protected $author = "admin";

    protected $description = "контакты";

    protected $moduleVersion = "4.15.1";

    public function up()
    {
        Option::set(
            Module::getModuleName(),
            'SITE_PRODUCTION_ADDRESS',
            'Вологда, Советский проспект, 135 Б'
        );

        Option::set(
            Module::getModuleName(),
            'SITE_STORE_ADDRESS',
            'Вологда, Советский проспект, 135 Б'
        );

        Option::set(
            Module::getModuleName(),
            'SITE_WORK_HOURS',
            'пн-пт с 08:30 до 17:00'
        );

        Option::set(
            Module::getModuleName(),
            'SITE_EMAIL',
            'office@vtktextile.ru'
        );

        Option::set(
            Module::getModuleName(),
            'SITE_PHONE',
            '+7 495 152 20 00'
        );
    }

    public function down()
    {
        //your code ...
    }
}
