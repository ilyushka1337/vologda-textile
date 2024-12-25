<?php

namespace Sprint\Migration;


class News20241225135646 extends Version
{
    protected $author = "admin";

    protected $description = "включен доступ на чтение для всех пользователей";

    protected $moduleVersion = "4.16.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('news', 'content');
        $helper->Iblock()->saveGroupPermissions($iblockId, array(
            'administrators' => 'X',
            'everyone' => 'R',
            'EDITOR' => 'R',
        ));

    }
}
