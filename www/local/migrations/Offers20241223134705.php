<?php

namespace Sprint\Migration;


class Offers20241223134705 extends Version
{
  protected $author = "admin";

  protected $description = "Свойство MODEL выводится в фильтр";

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
      'FEATURES' =>
        array(
          0 =>
            array(
              'MODULE_ID' => 'catalog',
              'FEATURE_ID' => 'IN_BASKET',
              'IS_ENABLED' => 'N',
            ),
          1 =>
            array(
              'MODULE_ID' => 'iblock',
              'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
              'IS_ENABLED' => 'Y',
            ),
          2 =>
            array(
              'MODULE_ID' => 'iblock',
              'FEATURE_ID' => 'LIST_PAGE_SHOW',
              'IS_ENABLED' => 'N',
            ),
        ),
      'SMART_FILTER' => 'Y',
      'DISPLAY_TYPE' => 'P',
      'DISPLAY_EXPANDED' => 'N',
      'FILTER_HINT' => '',
    ));

  }
}
