<?php

namespace Sprint\Migration;


class Slider20241211091358 extends Version
{
    protected $author = "admin";

    protected $description = "Добавлено свойство \"Заголовок слайда\" для инфоблока Слайдер";

    protected $moduleVersion = "4.15.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('slider', 'content');
        $helper->Iblock()->saveProperty($iblockId, array(
            'NAME' => 'Заголовок слайда',
            'ACTIVE' => 'Y',
            'SORT' => '500',
            'CODE' => 'TITLE',
            'DEFAULT_VALUE' => '',
            'PROPERTY_TYPE' => 'S',
            'ROW_COUNT' => '1',
            'COL_COUNT' => '30',
            'LIST_TYPE' => 'L',
            'MULTIPLE' => 'N',
            'XML_ID' => NULL,
            'FILE_TYPE' => '',
            'MULTIPLE_CNT' => '5',
            'LINK_IBLOCK_ID' => '0',
            'WITH_DESCRIPTION' => 'N',
            'SEARCHABLE' => 'N',
            'FILTRABLE' => 'N',
            'IS_REQUIRED' => 'N',
            'VERSION' => '1',
            'USER_TYPE' => NULL,
            'USER_TYPE_SETTINGS' => 'a:0:{}',
            'HINT' => '',
            'SMART_FILTER' => 'N',
            'DISPLAY_TYPE' => 'F',
            'DISPLAY_EXPANDED' => 'N',
            'FILTER_HINT' => '',
        ));
    }
}
