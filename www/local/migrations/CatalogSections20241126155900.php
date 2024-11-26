<?php

namespace Sprint\Migration;


class CatalogSections20241126155900 extends Version
{
  protected $author = "admin";

  protected $description = "Разделы каталога";

  protected $moduleVersion = "4.15.1";

  /**
   * @throws Exceptions\HelperException
   * @return bool|void
   */
  public function up()
  {
    $helper = $this->getHelperManager();

    $iblockId = $helper->Iblock()->getIblockIdIfExists(
      'catalog',
      'catalog'
    );

    $helper->Iblock()->addSectionsFromTree(
      $iblockId,
      array(
        0 =>
          array(
            'NAME' => 'Home',
            'CODE' => 'home',
            'SORT' => '100',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_SEO_TEXT' => NULL,
            'CHILDS' =>
              array(
                0 =>
                  array(
                    'NAME' => 'Спальня',
                    'CODE' => 'spalnya',
                    'SORT' => '100',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                    'CHILDS' =>
                      array(
                        0 =>
                          array(
                            'NAME' => 'Комплект постельного белья',
                            'CODE' => 'komplekt-postelnogo-belya',
                            'SORT' => '100',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => 'Откройте для себя мир комфорта и уюта в нашей спальне! Здесь вы найдете все необходимое для идеального отдыха: от изысканного постельного белья до мягких покрывал. Мы предлагаем разнообразные комплекты на любой вкус. Не упустите возможность обновить свою спальню с помощью наших высококачественных товаров. Приходите и убедитесь в этом сами!',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => 'seo-zagolovok-dlya-primera-v-dve-strochki',
                          ),
                        1 =>
                          array(
                            'NAME' => 'Покрывала',
                            'CODE' => 'pokryvala',
                            'SORT' => '200',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        2 =>
                          array(
                            'NAME' => 'Отдельные предметы',
                            'CODE' => 'otdelnye-predmety',
                            'SORT' => '200',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                      ),
                  ),
                1 =>
                  array(
                    'NAME' => 'Кухня',
                    'CODE' => 'kukhnya',
                    'SORT' => '200',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                    'CHILDS' =>
                      array(
                        0 =>
                          array(
                            'NAME' => 'Скатерти',
                            'CODE' => 'skaterti',
                            'SORT' => '100',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        1 =>
                          array(
                            'NAME' => 'Полотенца',
                            'CODE' => 'polotentsa',
                            'SORT' => '200',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        2 =>
                          array(
                            'NAME' => 'Шторы',
                            'CODE' => 'shtory',
                            'SORT' => '300',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        3 =>
                          array(
                            'NAME' => 'Декор стола',
                            'CODE' => 'dekor-stola',
                            'SORT' => '400',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                      ),
                  ),
                2 =>
                  array(
                    'NAME' => 'Гостиная',
                    'CODE' => 'gostinaya',
                    'SORT' => '300',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                    'CHILDS' =>
                      array(
                        0 =>
                          array(
                            'NAME' => 'Пледы',
                            'CODE' => 'pledy',
                            'SORT' => '100',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        1 =>
                          array(
                            'NAME' => 'Шторы',
                            'CODE' => 'shtory1',
                            'SORT' => '200',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        2 =>
                          array(
                            'NAME' => 'Декоративный текстиль',
                            'CODE' => 'dekorativnyy-tekstil',
                            'SORT' => '300',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                      ),
                  ),
              ),
          ),
        1 =>
          array(
            'NAME' => 'Spa',
            'CODE' => 'spa',
            'SORT' => '200',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_SEO_TEXT' => NULL,
          ),
        2 =>
          array(
            'NAME' => 'Kids',
            'CODE' => 'kids',
            'SORT' => '300',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_SEO_TEXT' => NULL,
          ),
        3 =>
          array(
            'NAME' => 'Premium',
            'CODE' => 'premium',
            'SORT' => '400',
            'ACTIVE' => 'Y',
            'XML_ID' => NULL,
            'DESCRIPTION' => '',
            'DESCRIPTION_TYPE' => 'text',
            'UF_SEO_TEXT' => NULL,
          ),
      )
    );
  }
}
