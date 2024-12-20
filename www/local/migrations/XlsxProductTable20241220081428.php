<?php

namespace Sprint\Migration;

use Bitrix\Main\Application;

class XlsxProductTable20241220081428 extends Version
{
    protected $author = "admin";

    protected $description = "новое поле MODEL";

    protected $moduleVersion = "4.16.1";

    public function up()
    {
        $connection = Application::getConnection();
        $connection->queryExecute(
            "ALTER TABLE `placestart_xlsx_product`
            ADD MODEL varchar(255) NULL"
        );
    }

    public function down()
    {
        $connection = Application::getConnection();
        $connection->queryExecute(
            "ALTER TABLE `placestart_xlsx_product`
            DROP COLUMN MODEL"
        );
    }
}
