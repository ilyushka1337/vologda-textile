<?php

namespace Sprint\Migration;


class SeoTextCatalogField20241210081546 extends Version
{
  protected $author = "admin";

  protected $description = "Поле \"Символьный код текста\" для разделов каталога";

  protected $moduleVersion = "4.15.1";

  /**
   * @throws Exceptions\HelperException
   * @return bool|void
   */
  public function up()
  {
    $helper = $this->getHelperManager();
    $helper->UserTypeEntity()->saveUserTypeEntity(array(
      'ENTITY_ID' => 'IBLOCK_catalog:catalog_SECTION',
      'FIELD_NAME' => 'UF_SEO_TEXT',
      'USER_TYPE_ID' => 'string',
      'XML_ID' => '',
      'SORT' => '100',
      'MULTIPLE' => 'N',
      'MANDATORY' => 'N',
      'SHOW_FILTER' => 'N',
      'SHOW_IN_LIST' => 'Y',
      'EDIT_IN_LIST' => 'Y',
      'IS_SEARCHABLE' => 'N',
      'SETTINGS' =>
        array(
          'SIZE' => 20,
          'ROWS' => 1,
          'REGEXP' => '',
          'MIN_LENGTH' => 0,
          'MAX_LENGTH' => 0,
          'DEFAULT_VALUE' => '',
        ),
      'EDIT_FORM_LABEL' =>
        array(
          'en' => 'Символьный код текста',
          'ru' => 'Символьный код текста',
        ),
      'LIST_COLUMN_LABEL' =>
        array(
          'en' => '',
          'ru' => '',
        ),
      'LIST_FILTER_LABEL' =>
        array(
          'en' => '',
          'ru' => '',
        ),
      'ERROR_MESSAGE' =>
        array(
          'en' => '',
          'ru' => '',
        ),
      'HELP_MESSAGE' =>
        array(
          'en' => '',
          'ru' => '',
        ),
    ));
  }

}
