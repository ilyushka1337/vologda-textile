<?php

namespace Sprint\Migration;


class Feedback20241015113356 extends Version
{
    protected $author = "admin";

    protected $description = "Почтовое событие FEEDBACK";

    protected $moduleVersion = "4.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $helper->Event()->saveEventType('FEEDBACK', array(
            'LID' => 'ru',
            'EVENT_TYPE' => 'email',
            'NAME' => 'Обратная связь',
            'DESCRIPTION' => '',
            'SORT' => '150',
        ));
        $helper->Event()->saveEventType('FEEDBACK', array(
            'LID' => 'en',
            'EVENT_TYPE' => 'email',
            'NAME' => 'Обратная связь',
            'DESCRIPTION' => '',
            'SORT' => '150',
        ));
    }
}
