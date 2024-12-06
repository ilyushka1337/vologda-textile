<?php

namespace Sprint\Migration;

use Bitrix\Main\Application;
use Placestart\Import\Entity\WildberriesCardTable;


class WildberriesCardTable20241205133705 extends Version
{
    protected $author = "admin";

    protected $description = "Таблица со списком номенклатур из Wildberries";

    protected $moduleVersion = "4.15.1";

    public function up()
    {
        $connection = Application::getConnection();
        $connection->queryExecute(
            "CREATE TABLE IF NOT EXISTS `placestart_wildberries_card`
            (
                `ID` int NOT NULL AUTO_INCREMENT,
                `NM_ID` varchar(255) NOT NULL,
                `IMT_ID` varchar(255) NOT NULL,
                `PHOTOS` varchar(255) NOT NULL,
                PRIMARY KEY(`ID`)
            )"
        );
    }

    public function down()
    {
        $connection = Application::getConnection();
        $connection->dropTable(WildberriesCardTable::getTableName());
    }
}
