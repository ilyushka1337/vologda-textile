<?php

namespace Sprint\Migration;


class CatalogSections20241216143726 extends Version
{
  protected $author = "admin";

  protected $description = "обновление разделов каталога";

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
                    'CODE' => 'spalnya-section',
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
                            'CODE' => 'komplekt-postelnogo-belya-section',
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
                            'CODE' => 'pokryvala-section',
                            'SORT' => '200',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        2 =>
                          array(
                            'NAME' => 'Пододеяльники',
                            'CODE' => 'pododeyalniki-section',
                            'SORT' => '500',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        3 =>
                          array(
                            'NAME' => 'Наволочки',
                            'CODE' => 'navolochki-section',
                            'SORT' => '500',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        4 =>
                          array(
                            'NAME' => 'Простыни',
                            'CODE' => 'prostyni-section',
                            'SORT' => '500',
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
                    'CODE' => 'kukhnya-section',
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
                            'CODE' => 'skaterti-section',
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
                            'CODE' => 'polotentsa-section',
                            'SORT' => '200',
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
                    'CODE' => 'gostinaya-section',
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
                            'CODE' => 'pledy-section',
                            'SORT' => '100',
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
            'CHILDS' =>
              array(
                0 =>
                  array(
                    'NAME' => 'Килты',
                    'CODE' => 'kilty-section',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                    'CHILDS' =>
                      array(
                        0 =>
                          array(
                            'NAME' => 'Женский килт',
                            'CODE' => 'zhenskiy-kilt-section',
                            'SORT' => '500',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        1 =>
                          array(
                            'NAME' => 'Мужской килт',
                            'CODE' => 'muzhskoy-kilt-section',
                            'SORT' => '500',
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
                    'NAME' => 'Полотенца для бани и ванной',
                    'CODE' => 'polotentsa-dlya-bani-i-vannoy-section',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                    'CHILDS' =>
                      array(
                        0 =>
                          array(
                            'NAME' => 'Простынь банная',
                            'CODE' => 'prostyn-bannaya-section',
                            'SORT' => '500',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        1 =>
                          array(
                            'NAME' => 'Полотенце вафельное',
                            'CODE' => 'polotentse-vafelnoe-section',
                            'SORT' => '500',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        2 =>
                          array(
                            'NAME' => 'Полотенце вафельное бохо',
                            'CODE' => 'polotentse-vafelnoe-bokho-section',
                            'SORT' => '500',
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
                    'NAME' => 'Наборы для spa',
                    'CODE' => 'nabory-dlya-spa-section',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                  ),
                3 =>
                  array(
                    'NAME' => 'Полтенца пляжные',
                    'CODE' => 'poltentsa-plyazhnye-section',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                  ),
                4 =>
                  array(
                    'NAME' => 'Халаты',
                    'CODE' => 'khalaty-section',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                    'CHILDS' =>
                      array(
                        0 =>
                          array(
                            'NAME' => 'Мужской халат',
                            'CODE' => 'muzhskoy-khalat-section',
                            'SORT' => '500',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        1 =>
                          array(
                            'NAME' => 'Женский халат',
                            'CODE' => 'zhenskiy-khalat-section',
                            'SORT' => '500',
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
            'CHILDS' =>
              array(
                0 =>
                  array(
                    'NAME' => 'Детские полотенца-уголки',
                    'CODE' => 'detskie-polotentsa-ugolki-section',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                  ),
                1 =>
                  array(
                    'NAME' => 'Детские халаты',
                    'CODE' => 'detskie-khalaty-section',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                  ),
              ),
          ),
      )
    );
  }
}
