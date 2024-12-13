<?php

namespace Sprint\Migration;


class CatalogSections20241213113122 extends Version
{
  protected $author = "admin";

  protected $description = "обновление разделов";

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
                            'NAME' => 'Пододеяльники',
                            'CODE' => 'pododeyalniki',
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
                            'CODE' => 'navolochki',
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
                            'CODE' => 'prostyni',
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
                    'NAME' => 'Наборы для spa',
                    'CODE' => 'nabory-dlya-spa',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                  ),
                1 =>
                  array(
                    'NAME' => 'Полотенца для бани',
                    'CODE' => 'polotentsa-dlya-bani',
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
                            'NAME' => 'Полотенце вафельное бохо',
                            'CODE' => 'polotentse-vafelnoe-bokho',
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
                            'CODE' => 'polotentse-vafelnoe',
                            'SORT' => '500',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        2 =>
                          array(
                            'NAME' => 'Простынь банная',
                            'CODE' => 'prostyn-bannaya',
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
                    'NAME' => 'Комплект для сауны ',
                    'CODE' => 'komplekt-dlya-sauny',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                  ),
                3 =>
                  array(
                    'NAME' => 'Простынь вафельная',
                    'CODE' => 'prostyn-vafelnaya',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                  ),
                4 =>
                  array(
                    'NAME' => 'Полтенца пляжные',
                    'CODE' => 'poltentsa-plyazhnye',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                  ),
                5 =>
                  array(
                    'NAME' => 'Килт мужской',
                    'CODE' => 'kilt-muzhskoy',
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
                            'NAME' => 'Килт мужской вафельный бохо',
                            'CODE' => 'kilt-muzhskoy-vafelnyy-bokho',
                            'SORT' => '500',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                        1 =>
                          array(
                            'NAME' => 'Килт мужской вафельный',
                            'CODE' => 'kilt-muzhskoy-vafelnyy',
                            'SORT' => '500',
                            'ACTIVE' => 'Y',
                            'XML_ID' => NULL,
                            'DESCRIPTION' => '',
                            'DESCRIPTION_TYPE' => 'text',
                            'UF_SEO_TEXT' => NULL,
                          ),
                      ),
                  ),
                6 =>
                  array(
                    'NAME' => 'Килт женский',
                    'CODE' => 'kilt-zhenskiy',
                    'SORT' => '500',
                    'ACTIVE' => 'Y',
                    'XML_ID' => NULL,
                    'DESCRIPTION' => '',
                    'DESCRIPTION_TYPE' => 'text',
                    'UF_SEO_TEXT' => NULL,
                  ),
                7 =>
                  array(
                    'NAME' => 'Халаты',
                    'CODE' => 'khalaty',
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
                            'NAME' => 'Халаты вафельные бохо',
                            'CODE' => 'khalaty-vafelnye-bokho',
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
                                    'NAME' => 'Халат вафельный "Бохо" Кимоно',
                                    'CODE' => 'khalat-vafelnyy-bokho-kimono',
                                    'SORT' => '500',
                                    'ACTIVE' => 'Y',
                                    'XML_ID' => NULL,
                                    'DESCRIPTION' => '',
                                    'DESCRIPTION_TYPE' => 'text',
                                    'UF_SEO_TEXT' => NULL,
                                  ),
                                1 =>
                                  array(
                                    'NAME' => 'Халат вафельный "Бохо" Капюшон',
                                    'CODE' => 'khalat-vafelnyy-bokho-kapyushon',
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
                            'NAME' => 'Халаты вафельные',
                            'CODE' => 'khalaty-vafelnye',
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
                                    'NAME' => 'Женский халат вафельный «Кимоно»',
                                    'CODE' => 'zhenskiy-khalat-vafelnyy-kimono',
                                    'SORT' => '500',
                                    'ACTIVE' => 'Y',
                                    'XML_ID' => NULL,
                                    'DESCRIPTION' => '',
                                    'DESCRIPTION_TYPE' => 'text',
                                    'UF_SEO_TEXT' => NULL,
                                  ),
                                1 =>
                                  array(
                                    'NAME' => 'Мужской халат вафельный "Кимоно"',
                                    'CODE' => 'muzhskoy-khalat-vafelnyy-kimono',
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
                    'CODE' => 'detskie-polotentsa-ugolki',
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
                    'CODE' => 'detskie-khalaty',
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
