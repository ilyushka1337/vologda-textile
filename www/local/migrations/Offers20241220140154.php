<?php

namespace Sprint\Migration;


class Offers20241220140154 extends Version
{
  protected $author = "admin";

  protected $description = "для свойства IS_NEW отключен вывод на детальной странице";

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
      'NAME' => 'Новинка',
      'ACTIVE' => 'Y',
      'SORT' => '600',
      'CODE' => 'IS_NEW',
      'DEFAULT_VALUE' => '',
      'PROPERTY_TYPE' => 'L',
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
      'VALUES' =>
        array(
          0 =>
            array(
              'VALUE' => 'Да',
              'DEF' => 'N',
              'SORT' => '500',
              'XML_ID' => 'Y',
            ),
          1 =>
            array(
              'VALUE' => 'Нет',
              'DEF' => 'N',
              'SORT' => '500',
              'XML_ID' => 'N',
            ),
        ),
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
              'MODULE_ID' => 'catalog',
              'FEATURE_ID' => 'OFFER_TREE',
              'IS_ENABLED' => 'N',
            ),
          2 =>
            array(
              'MODULE_ID' => 'iblock',
              'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
              'IS_ENABLED' => 'N',
            ),
          3 =>
            array(
              'MODULE_ID' => 'iblock',
              'FEATURE_ID' => 'LIST_PAGE_SHOW',
              'IS_ENABLED' => 'N',
            ),
        ),
      'SMART_FILTER' => 'N',
      'DISPLAY_TYPE' => 'F',
      'DISPLAY_EXPANDED' => 'N',
      'FILTER_HINT' => '',
    ));

  }
}
