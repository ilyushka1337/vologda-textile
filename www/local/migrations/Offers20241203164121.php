<?php

namespace Sprint\Migration;


class Offers20241203164121 extends Version
{
  protected $author = "admin";

  protected $description = "Инфоблок торговых предложений";

  protected $moduleVersion = "4.15.1";

  /**
   * @throws Exceptions\HelperException
   * @return bool|void
   */
  public function up()
  {
    $helper = $this->getHelperManager();
    $helper->Iblock()->saveIblockType(array(
      'ID' => 'catalog',
      'SECTIONS' => 'Y',
      'EDIT_FILE_BEFORE' => '',
      'EDIT_FILE_AFTER' => '',
      'IN_RSS' => 'N',
      'SORT' => '500',
      'LANG' =>
        array(
          'ru' =>
            array(
              'NAME' => 'Каталог',
              'SECTION_NAME' => '',
              'ELEMENT_NAME' => '',
            ),
          'en' =>
            array(
              'NAME' => 'Каталог',
              'SECTION_NAME' => '',
              'ELEMENT_NAME' => '',
            ),
        ),
    ));
    $iblockId = $helper->Iblock()->saveIblock(array(
      'IBLOCK_TYPE_ID' => 'catalog',
      'LID' =>
        array(
          0 => 's1',
        ),
      'CODE' => 'offers',
      'API_CODE' => 'offers',
      'REST_ON' => 'N',
      'NAME' => 'Предложения',
      'ACTIVE' => 'Y',
      'SORT' => '500',
      'LIST_PAGE_URL' => '',
      'DETAIL_PAGE_URL' => '#PRODUCT_URL#',
      'SECTION_PAGE_URL' => '',
      'CANONICAL_PAGE_URL' => '',
      'PICTURE' => NULL,
      'DESCRIPTION' => '',
      'DESCRIPTION_TYPE' => 'text',
      'RSS_TTL' => '24',
      'RSS_ACTIVE' => 'Y',
      'RSS_FILE_ACTIVE' => 'N',
      'RSS_FILE_LIMIT' => NULL,
      'RSS_FILE_DAYS' => NULL,
      'RSS_YANDEX_ACTIVE' => 'N',
      'XML_ID' => NULL,
      'INDEX_ELEMENT' => 'Y',
      'INDEX_SECTION' => 'N',
      'WORKFLOW' => 'N',
      'BIZPROC' => 'N',
      'SECTION_CHOOSER' => 'L',
      'LIST_MODE' => '',
      'RIGHTS_MODE' => 'S',
      'SECTION_PROPERTY' => 'Y',
      'PROPERTY_INDEX' => 'N',
      'VERSION' => '1',
      'LAST_CONV_ELEMENT' => '0',
      'SOCNET_GROUP_ID' => NULL,
      'EDIT_FILE_BEFORE' => '',
      'EDIT_FILE_AFTER' => '',
      'SECTIONS_NAME' => 'Разделы',
      'SECTION_NAME' => 'Раздел',
      'ELEMENTS_NAME' => 'Элементы',
      'ELEMENT_NAME' => 'Элемент',
      'EXTERNAL_ID' => NULL,
      'LANG_DIR' => '/',
      'IPROPERTY_TEMPLATES' =>
        array(
        ),
      'ELEMENT_ADD' => 'Добавить элемент',
      'ELEMENT_EDIT' => 'Изменить элемент',
      'ELEMENT_DELETE' => 'Удалить элемент',
      'SECTION_ADD' => 'Добавить раздел',
      'SECTION_EDIT' => 'Изменить раздел',
      'SECTION_DELETE' => 'Удалить раздел',
    ));
    $helper->Iblock()->saveIblockFields($iblockId, array(
      'IBLOCK_SECTION' =>
        array(
          'NAME' => 'Привязка к разделам',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' =>
            array(
              'KEEP_IBLOCK_SECTION_ID' => 'N',
            ),
          'VISIBLE' => 'Y',
        ),
      'ACTIVE' =>
        array(
          'NAME' => 'Активность',
          'IS_REQUIRED' => 'Y',
          'DEFAULT_VALUE' => 'Y',
          'VISIBLE' => 'Y',
        ),
      'ACTIVE_FROM' =>
        array(
          'NAME' => 'Начало активности',
          'IS_REQUIRED' => 'Y',
          'DEFAULT_VALUE' => '=now',
          'VISIBLE' => 'Y',
        ),
      'ACTIVE_TO' =>
        array(
          'NAME' => 'Окончание активности',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE' => 'Y',
        ),
      'SORT' =>
        array(
          'NAME' => 'Сортировка',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => '0',
          'VISIBLE' => 'Y',
        ),
      'NAME' =>
        array(
          'NAME' => 'Название',
          'IS_REQUIRED' => 'Y',
          'DEFAULT_VALUE' => '',
          'VISIBLE' => 'Y',
        ),
      'PREVIEW_PICTURE' =>
        array(
          'NAME' => 'Картинка для анонса',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' =>
            array(
              'FROM_DETAIL' => 'N',
              'UPDATE_WITH_DETAIL' => 'N',
              'DELETE_WITH_DETAIL' => 'N',
              'SCALE' => 'N',
              'WIDTH' => '',
              'HEIGHT' => '',
              'IGNORE_ERRORS' => 'N',
              'METHOD' => 'resample',
              'COMPRESSION' => 95,
              'USE_WATERMARK_TEXT' => 'N',
              'WATERMARK_TEXT' => '',
              'WATERMARK_TEXT_FONT' => '',
              'WATERMARK_TEXT_COLOR' => '',
              'WATERMARK_TEXT_SIZE' => '',
              'WATERMARK_TEXT_POSITION' => 'tl',
              'USE_WATERMARK_FILE' => 'N',
              'WATERMARK_FILE' => '',
              'WATERMARK_FILE_ALPHA' => '',
              'WATERMARK_FILE_POSITION' => 'tl',
              'WATERMARK_FILE_ORDER' => '',
            ),
          'VISIBLE' => 'Y',
        ),
      'PREVIEW_TEXT_TYPE' =>
        array(
          'NAME' => 'Тип описания для анонса',
          'IS_REQUIRED' => 'Y',
          'DEFAULT_VALUE' => 'text',
          'VISIBLE' => 'Y',
        ),
      'PREVIEW_TEXT' =>
        array(
          'NAME' => 'Описание для анонса',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE' => 'Y',
        ),
      'DETAIL_PICTURE' =>
        array(
          'NAME' => 'Детальная картинка',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' =>
            array(
              'SCALE' => 'N',
              'WIDTH' => '',
              'HEIGHT' => '',
              'IGNORE_ERRORS' => 'N',
              'METHOD' => 'resample',
              'COMPRESSION' => 95,
              'USE_WATERMARK_TEXT' => 'N',
              'WATERMARK_TEXT' => '',
              'WATERMARK_TEXT_FONT' => '',
              'WATERMARK_TEXT_COLOR' => '',
              'WATERMARK_TEXT_SIZE' => '',
              'WATERMARK_TEXT_POSITION' => 'tl',
              'USE_WATERMARK_FILE' => 'N',
              'WATERMARK_FILE' => '',
              'WATERMARK_FILE_ALPHA' => '',
              'WATERMARK_FILE_POSITION' => 'tl',
              'WATERMARK_FILE_ORDER' => '',
            ),
          'VISIBLE' => 'Y',
        ),
      'DETAIL_TEXT_TYPE' =>
        array(
          'NAME' => 'Тип детального описания',
          'IS_REQUIRED' => 'Y',
          'DEFAULT_VALUE' => 'text',
          'VISIBLE' => 'Y',
        ),
      'DETAIL_TEXT' =>
        array(
          'NAME' => 'Детальное описание',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE' => 'Y',
        ),
      'XML_ID' =>
        array(
          'NAME' => 'Внешний код',
          'IS_REQUIRED' => 'Y',
          'DEFAULT_VALUE' => '',
          'VISIBLE' => 'Y',
        ),
      'CODE' =>
        array(
          'NAME' => 'Символьный код',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' =>
            array(
              'UNIQUE' => 'Y',
              'TRANSLITERATION' => 'Y',
              'TRANS_LEN' => 100,
              'TRANS_CASE' => 'L',
              'TRANS_SPACE' => '-',
              'TRANS_OTHER' => '-',
              'TRANS_EAT' => 'Y',
              'USE_GOOGLE' => 'N',
            ),
          'VISIBLE' => 'Y',
        ),
      'TAGS' =>
        array(
          'NAME' => 'Теги',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE' => 'Y',
        ),
      'SECTION_NAME' =>
        array(
          'NAME' => 'Название',
          'IS_REQUIRED' => 'Y',
          'DEFAULT_VALUE' => '',
          'VISIBLE' => 'Y',
        ),
      'SECTION_PICTURE' =>
        array(
          'NAME' => 'Картинка для анонса',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' =>
            array(
              'FROM_DETAIL' => 'N',
              'UPDATE_WITH_DETAIL' => 'N',
              'DELETE_WITH_DETAIL' => 'N',
              'SCALE' => 'N',
              'WIDTH' => '',
              'HEIGHT' => '',
              'IGNORE_ERRORS' => 'N',
              'METHOD' => 'resample',
              'COMPRESSION' => 95,
              'USE_WATERMARK_TEXT' => 'N',
              'WATERMARK_TEXT' => '',
              'WATERMARK_TEXT_FONT' => '',
              'WATERMARK_TEXT_COLOR' => '',
              'WATERMARK_TEXT_SIZE' => '',
              'WATERMARK_TEXT_POSITION' => 'tl',
              'USE_WATERMARK_FILE' => 'N',
              'WATERMARK_FILE' => '',
              'WATERMARK_FILE_ALPHA' => '',
              'WATERMARK_FILE_POSITION' => 'tl',
              'WATERMARK_FILE_ORDER' => '',
            ),
          'VISIBLE' => 'Y',
        ),
      'SECTION_DESCRIPTION_TYPE' =>
        array(
          'NAME' => 'Тип описания',
          'IS_REQUIRED' => 'Y',
          'DEFAULT_VALUE' => 'text',
          'VISIBLE' => 'Y',
        ),
      'SECTION_DESCRIPTION' =>
        array(
          'NAME' => 'Описание',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE' => 'Y',
        ),
      'SECTION_DETAIL_PICTURE' =>
        array(
          'NAME' => 'Детальная картинка',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' =>
            array(
              'SCALE' => 'N',
              'WIDTH' => '',
              'HEIGHT' => '',
              'IGNORE_ERRORS' => 'N',
              'METHOD' => 'resample',
              'COMPRESSION' => 95,
              'USE_WATERMARK_TEXT' => 'N',
              'WATERMARK_TEXT' => '',
              'WATERMARK_TEXT_FONT' => '',
              'WATERMARK_TEXT_COLOR' => '',
              'WATERMARK_TEXT_SIZE' => '',
              'WATERMARK_TEXT_POSITION' => 'tl',
              'USE_WATERMARK_FILE' => 'N',
              'WATERMARK_FILE' => '',
              'WATERMARK_FILE_ALPHA' => '',
              'WATERMARK_FILE_POSITION' => 'tl',
              'WATERMARK_FILE_ORDER' => '',
            ),
          'VISIBLE' => 'Y',
        ),
      'SECTION_XML_ID' =>
        array(
          'NAME' => 'Внешний код',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => '',
          'VISIBLE' => 'Y',
        ),
      'SECTION_CODE' =>
        array(
          'NAME' => 'Символьный код',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' =>
            array(
              'UNIQUE' => 'N',
              'TRANSLITERATION' => 'N',
              'TRANS_LEN' => 100,
              'TRANS_CASE' => 'L',
              'TRANS_SPACE' => '-',
              'TRANS_OTHER' => '-',
              'TRANS_EAT' => 'Y',
              'USE_GOOGLE' => 'N',
            ),
          'VISIBLE' => 'Y',
        ),
      'LOG_SECTION_ADD' =>
        array(
          'NAME' => 'LOG_SECTION_ADD',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => NULL,
          'VISIBLE' => 'Y',
        ),
      'LOG_SECTION_EDIT' =>
        array(
          'NAME' => 'LOG_SECTION_EDIT',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => NULL,
          'VISIBLE' => 'Y',
        ),
      'LOG_SECTION_DELETE' =>
        array(
          'NAME' => 'LOG_SECTION_DELETE',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => NULL,
          'VISIBLE' => 'Y',
        ),
      'LOG_ELEMENT_ADD' =>
        array(
          'NAME' => 'LOG_ELEMENT_ADD',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => NULL,
          'VISIBLE' => 'Y',
        ),
      'LOG_ELEMENT_EDIT' =>
        array(
          'NAME' => 'LOG_ELEMENT_EDIT',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => NULL,
          'VISIBLE' => 'Y',
        ),
      'LOG_ELEMENT_DELETE' =>
        array(
          'NAME' => 'LOG_ELEMENT_DELETE',
          'IS_REQUIRED' => 'N',
          'DEFAULT_VALUE' => NULL,
          'VISIBLE' => 'Y',
        ),
    ));
    $helper->Iblock()->saveGroupPermissions($iblockId, array(
      'administrators' => 'X',
      'everyone' => 'R',
    ));
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Баркод',
      'ACTIVE' => 'Y',
      'SORT' => '100',
      'CODE' => 'BARCODE',
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
      'IS_REQUIRED' => 'Y',
      'VERSION' => '1',
      'USER_TYPE' => NULL,
      'USER_TYPE_SETTINGS' => 'a:0:{}',
      'HINT' => '',
      'SMART_FILTER' => 'N',
      'DISPLAY_TYPE' => 'F',
      'DISPLAY_EXPANDED' => 'N',
      'FILTER_HINT' => '',
    ));
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Артикул WB',
      'ACTIVE' => 'Y',
      'SORT' => '200',
      'CODE' => 'ARTICUL_WB',
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
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Артикул товара OZON',
      'ACTIVE' => 'Y',
      'SORT' => '300',
      'CODE' => 'ARTICUL_OZON',
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
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Размер',
      'ACTIVE' => 'Y',
      'SORT' => '400',
      'CODE' => 'SIZE',
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
      'USER_TYPE' => 'directory',
      'USER_TYPE_SETTINGS' =>
        array(
          'size' => 1,
          'width' => 0,
          'group' => 'N',
          'multiple' => 'N',
          'TABLE_NAME' => 'b_hlbd_sizes',
        ),
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
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Размер наволочки',
      'ACTIVE' => 'Y',
      'SORT' => '500',
      'CODE' => 'PILLOWSLIP_SIZE',
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
      'USER_TYPE' => 'directory',
      'USER_TYPE_SETTINGS' =>
        array(
          'size' => 1,
          'width' => 0,
          'group' => 'N',
          'multiple' => 'N',
          'TABLE_NAME' => 'b_hlbd_pillowslipsizes',
        ),
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
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Цвет',
      'ACTIVE' => 'Y',
      'SORT' => '500',
      'CODE' => 'COLOR',
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
      'USER_TYPE' => 'directory',
      'USER_TYPE_SETTINGS' =>
        array(
          'size' => 1,
          'width' => 0,
          'group' => 'N',
          'multiple' => 'N',
          'TABLE_NAME' => 'b_hlbd_colors',
        ),
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
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Элемент каталога',
      'ACTIVE' => 'Y',
      'SORT' => '500',
      'CODE' => 'CML2_LINK',
      'DEFAULT_VALUE' => NULL,
      'PROPERTY_TYPE' => 'E',
      'ROW_COUNT' => '1',
      'COL_COUNT' => '30',
      'LIST_TYPE' => 'L',
      'MULTIPLE' => 'N',
      'XML_ID' => 'CML2_LINK',
      'FILE_TYPE' => NULL,
      'MULTIPLE_CNT' => NULL,
      'LINK_IBLOCK_ID' => 'catalog:catalog',
      'WITH_DESCRIPTION' => NULL,
      'SEARCHABLE' => 'N',
      'FILTRABLE' => 'Y',
      'IS_REQUIRED' => NULL,
      'VERSION' => '1',
      'USER_TYPE' => 'SKU',
      'USER_TYPE_SETTINGS' =>
        array(
          'VIEW' => 'A',
          'SHOW_ADD' => 'N',
          'MAX_WIDTH' => 0,
          'MIN_HEIGHT' => 24,
          'MAX_HEIGHT' => 1000,
          'BAN_SYM' => ',;',
          'REP_SYM' => ' ',
          'OTHER_REP_SYM' => '',
          'IBLOCK_MESS' => 'N',
        ),
      'HINT' => NULL,
      'SMART_FILTER' => NULL,
      'DISPLAY_TYPE' => NULL,
      'DISPLAY_EXPANDED' => NULL,
      'FILTER_HINT' => NULL,
    ));
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
      'USER_TYPE_SETTINGS' => 'a:0:{}',
      'HINT' => '',
      'VALUES' =>
        array(
          0 =>
            array(
              'VALUE' => 'Да',
              'DEF' => 'N',
              'SORT' => '500',
              'XML_ID' => 'N',
            ),
          1 =>
            array(
              'VALUE' => 'Нет',
              'DEF' => 'N',
              'SORT' => '500',
              'XML_ID' => 'Y',
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
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Размер простыни',
      'ACTIVE' => 'Y',
      'SORT' => '700',
      'CODE' => 'BEDSHEET_SIZE',
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
      'USER_TYPE' => 'directory',
      'USER_TYPE_SETTINGS' =>
        array(
          'size' => 1,
          'width' => 0,
          'group' => 'N',
          'multiple' => 'N',
          'TABLE_NAME' => 'b_hlbd_bedsheetsizes',
        ),
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
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Размер одеяла',
      'ACTIVE' => 'Y',
      'SORT' => '800',
      'CODE' => 'BLANKET_SIZE',
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
      'USER_TYPE' => 'directory',
      'USER_TYPE_SETTINGS' =>
        array(
          'size' => 1,
          'width' => 0,
          'group' => 'N',
          'multiple' => 'N',
          'TABLE_NAME' => 'b_hlbd_blanketsizes',
        ),
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
    $helper->Iblock()->saveProperty($iblockId, array(
      'NAME' => 'Элемент каталога',
      'ACTIVE' => 'Y',
      'SORT' => '20000',
      'CODE' => 'CML2_LINK',
      'DEFAULT_VALUE' => '',
      'PROPERTY_TYPE' => 'E',
      'ROW_COUNT' => '1',
      'COL_COUNT' => '30',
      'LIST_TYPE' => 'L',
      'MULTIPLE' => 'N',
      'XML_ID' => 'CML2_LINK',
      'FILE_TYPE' => '',
      'MULTIPLE_CNT' => '5',
      'LINK_IBLOCK_ID' => '0',
      'WITH_DESCRIPTION' => 'N',
      'SEARCHABLE' => 'N',
      'FILTRABLE' => 'Y',
      'IS_REQUIRED' => 'N',
      'VERSION' => '1',
      'USER_TYPE' => 'SKU',
      'USER_TYPE_SETTINGS' =>
        array(
          'VIEW' => 'A',
          'SHOW_ADD' => 'N',
          'MAX_WIDTH' => 0,
          'MIN_HEIGHT' => 24,
          'MAX_HEIGHT' => 1000,
          'BAN_SYM' => ',;',
          'REP_SYM' => ' ',
          'OTHER_REP_SYM' => '',
          'IBLOCK_MESS' => 'N',
        ),
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
              'IS_ENABLED' => 'N',
            ),
          2 =>
            array(
              'MODULE_ID' => 'iblock',
              'FEATURE_ID' => 'LIST_PAGE_SHOW',
              'IS_ENABLED' => 'N',
            ),
        ),
    ));
    $helper->UserOptions()->saveElementGrid($iblockId, array(
      'views' =>
        array(
          'default' =>
            array(
              'columns' =>
                array(
                  0 => '',
                ),
              'columns_sizes' =>
                array(
                  'expand' => 1,
                  'columns' =>
                    array(
                    ),
                ),
              'sticked_columns' =>
                array(
                ),
              'custom_names' =>
                array(
                ),
            ),
        ),
      'filters' =>
        array(
        ),
      'current_view' => 'default',
    ));
    $helper->UserOptions()->saveSectionGrid($iblockId, array(
      'views' =>
        array(
          'default' =>
            array(
              'columns' =>
                array(
                  0 => '',
                ),
              'columns_sizes' =>
                array(
                  'expand' => 1,
                  'columns' =>
                    array(
                    ),
                ),
              'sticked_columns' =>
                array(
                ),
              'custom_names' =>
                array(
                ),
            ),
        ),
      'filters' =>
        array(
        ),
      'current_view' => 'default',
    ));

  }
}
