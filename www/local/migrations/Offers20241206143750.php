<?php

namespace Sprint\Migration;


class Offers20241206143750 extends Version
{
  protected $author = "admin";

  protected $description = "Новое свойство \"Галерея изображений\"";

  protected $moduleVersion = "4.15.1";

  /**
   * @throws Exceptions\HelperException
   * @return bool|void
   */
  public function up()
  {
    $helper = $this->getHelperManager();
    $iblockId = $helper->Iblock()->getIblockIdIfExists('offers', 'catalog');
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Галерея изображений',
      'ACTIVE' => 'Y',
      'SORT' => '900',
      'CODE' => 'PREVIEW_GALLERY',
      'DEFAULT_VALUE' => '',
      'PROPERTY_TYPE' => 'F',
      'ROW_COUNT' => '1',
      'COL_COUNT' => '30',
      'LIST_TYPE' => 'L',
      'MULTIPLE' => 'Y',
      'XML_ID' => NULL,
      'FILE_TYPE' => 'jpg, gif, bmp, png, jpeg, webp',
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
              'MODULE_ID' => 'iblock',
              'FEATURE_ID' => 'DETAIL_PAGE_SHOW',
              'IS_ENABLED' => 'N',
            ),
          1 =>
            array(
              'MODULE_ID' => 'iblock',
              'FEATURE_ID' => 'LIST_PAGE_SHOW',
              'IS_ENABLED' => 'N',
            ),
        ),
      'SMART_FILTER' => 'N',
      'DISPLAY_TYPE' => '',
      'DISPLAY_EXPANDED' => 'N',
      'FILTER_HINT' => '',
    ));

  }
}
