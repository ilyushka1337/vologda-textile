<?php

namespace Sprint\Migration;

use Bitrix\Main\Application;

class WildberriesCardTable20241206093915 extends Version
{
    protected $author = "admin";

    protected $description = "увеличена ширина колонки PHOTOS до 10000";

    protected $moduleVersion = "4.15.1";

    public function up()
    {
        $connection = Application::getConnection();
        $connection->queryExecute("ALTER TABLE `placestart_wildberries_card` CHANGE `PHOTOS` `PHOTOS` varchar(10000);");
    }

    public function down()
    {

    }
}
