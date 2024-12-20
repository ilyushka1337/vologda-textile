<?php

namespace Sprint\Migration;


class Offers20241220082423 extends Version
{
    protected $author = "admin";

    protected $description = "новое свойство MODEL";

    protected $moduleVersion = "4.16.1";

    /**
     * @throws Exceptions\HelperException
     * @return bool|void
     */
    public function up()
    {
        $helper = $this->getHelperManager();
        $iblockId = $helper->Iblock()->getIblockIdIfExists('offers', 'catalog');
        $helper->Iblock()->saveProperty($iblockId, array(
            'NAME' => 'Модель',
            'ACTIVE' => 'Y',
            'SORT' => '1000',
            'CODE' => 'MODEL',
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
            'USER_TYPE_SETTINGS' => NULL,
            'HINT' => '',
            'SMART_FILTER' => 'N',
            'DISPLAY_TYPE' => '',
            'DISPLAY_EXPANDED' => 'N',
            'FILTER_HINT' => '',
        ));

    }
}
