<?php

namespace Sprint\Migration;

use Bitrix\Main\Application;

class XlsxProductTable20241213083529 extends Version
{
    protected $author = "admin";

    protected $description = "Поле ARTICUL_WB сделано необязательным";

    protected $moduleVersion = "4.15.1";

    public function up()
    {
        $connection = Application::getConnection();
        $connection->queryExecute(
            "ALTER TABLE `placestart_xlsx_product`
            CHANGE `ARTICUL_WB` `ARTICUL_WB` varchar(255) NULL
        "
        );
    }

    public function down()
    {
        $connection = Application::getConnection();
        $connection->queryExecute(
            "ALTER TABLE `placestart_xlsx_product`
            CHANGE `ARTICUL_WB` `ARTICUL_WB` varchar(255) NOT NULL
        "
        );
    }
}
