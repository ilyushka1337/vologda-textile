<?php

namespace Sprint\Migration;

class SiteSettings20241108162140 extends Version
{
    protected $author = "admin";

    protected $description = "Настройки сайта s1";

    protected $moduleVersion = "4.15.1";

    public function up()
    {
        $site = new \CSite;
        $site->Update('s1', [
            "ACTIVE" => "Y",
            "SORT" => 1,
            "DEF" => "Y",
            "DIR" => '/',
            "NAME" => 'Шаблон разработки на битриксе',
            "SITE_NAME" => 'Шаблон разработки на битриксе',
            "SERVER_NAME" => "bitrix.local",
            "EMAIL" => "feadback@place-start.ru",
            "LANGUAGE_ID" => "ru",
            'TEMPLATE' => [
                [
                    'TEMPLATE' => 'dev-tpl',
                    'SORT' => 1,
                    'CONDITION' => ''
                ]
            ]
        ]);
    }

    public function down()
    {

    }
}
