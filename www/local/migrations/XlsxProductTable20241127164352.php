<?php

namespace Sprint\Migration;

use Bitrix\Main\Application;
use Placestart\Import\Entity\XlsxProductTable;


class XlsxProductTable20241127164352 extends Version
{
    protected $author = "admin";

    protected $description = "Таблица с товарами из xlsx файла";

    protected $moduleVersion = "4.15.1";

    public function up()
    {
        $connection = Application::getConnection();
        $connection->queryExecute(
            "CREATE TABLE IF NOT EXISTS `placestart_xlsx_product`
            (
                `ID` int NOT NULL AUTO_INCREMENT,
                `BARCODE` varchar(255) NOT NULL,
                `DESCRIPTION` varchar(255),
                `ARTICUL_WB` varchar(255) NOT NULL,
                `ARTICUL_OZON` varchar(255),
                `CARD_ID` int NOT NULL,
                `SIZE` varchar(255) NOT NULL,
                `PILLOWSLIP_SIZE` varchar(255),
                `COLOR` varchar(255) NOT NULL,
                `TITLE` varchar(255) NOT NULL,
                `IS_NEW` varchar(1),
                `TOP_CATEGORY_NAME` varchar(255) NOT NULL,
                `CATEGORY_NUMBER` varchar(255) NOT NULL,
                `BEDSHEET_SIZE` varchar(255),
                `BLANKET_SIZE` varchar(255),
                PRIMARY KEY(`ID`)
            )"
        );
    }

    public function down()
    {
        $connection = Application::getConnection();
        $connection->dropTable(XlsxProductTable::getTableName());
    }
}
