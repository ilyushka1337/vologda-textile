<?php

namespace Sprint\Migration;


class Order20241224110434 extends Version
{
    protected $author = "admin";

    protected $description = "Почтовое событие ORDER";

    protected $moduleVersion = "4.16.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Event()->saveEventType('ORDER', array (
  'LID' => 'ru',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Заказ',
  'DESCRIPTION' => '#PHONE# - номер телефона
#EMAIL# - email
#FIO# - ФИО
#COMMENT# - комментарий',
  'SORT' => '150',
));
            $helper->Event()->saveEventType('ORDER', array (
  'LID' => 'en',
  'EVENT_TYPE' => 'email',
  'NAME' => 'Заказ',
  'DESCRIPTION' => '#PHONE# - номер телефона
#EMAIL# - email
#FIO# - ФИО
#COMMENT# - комментарий',
  'SORT' => '150',
));
        }
}
