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
        XlsxProductTable::getEntity()->createDbTable();
    }

    public function down()
    {
        $connection = Application::getConnection();
        $connection->dropTable('placestart_xlsx_product');
    }
}
