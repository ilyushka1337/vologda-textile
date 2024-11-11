<?php

namespace Sprint\Migration;


class Editor20241007150010 extends Version
{
    protected $author = "admin";

    protected $description = "группа редакторов";

    protected $moduleVersion = "4.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();

        $helper->UserGroup()->saveGroup('EDITOR', array(
            'ACTIVE' => 'Y',
            'C_SORT' => '100',
            'ANONYMOUS' => 'N',
            'NAME' => 'Редактор',
            'DESCRIPTION' => '',
            'SECURITY_POLICY' =>
                array(
                ),
        ));
    }

}
