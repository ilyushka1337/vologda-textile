<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

use Bitrix\Main\Loader;

Loader::includeModule('sprint.options');
?>

</main>

<div class="catalog-menu desktop-catalog" x-data="{currentMenu: -1, logo: ''}" x-show="$store.catalogMenu.isOpen"
    @keyup.escape.window="$store.catalogMenu.isOpen = false" @click.outside="$store.catalogMenu.isOpen = false">
    <div class="wrap" @click.outside="currentMenu = -1; logo = ''" @keyup.escape.window="currentMenu = -1">
        <? $APPLICATION->IncludeComponent(
            "bitrix:catalog.section.list",
            "catalog-tree-menu",
            array(
                "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "",
                "ADD_SECTIONS_CHAIN" => "N",
                "CACHE_FILTER" => "N",
                "CACHE_GROUPS" => "N",
                "CACHE_TIME" => "36000000",
                "CACHE_TYPE" => "A",
                "COUNT_ELEMENTS" => "Y",
                "COUNT_ELEMENTS_FILTER" => "CNT_ALL",
                "FILTER_NAME" => "",
                "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                "IBLOCK_ID" => \Placestart\Core\Utils::locateIblock('catalog'),
                "IBLOCK_TYPE" => "catalog",
                "SECTION_CODE" => "",
                "SECTION_FIELDS" => array("", ""),
                "SECTION_ID" => "",
                "SECTION_URL" => "",
                "SECTION_USER_FIELDS" => array("", ""),
                "SHOW_PARENT_NAME" => "Y",
                "TOP_DEPTH" => "3",
                "VIEW_MODE" => "LIST"
            )
        ); ?>
    </div>
</div>

<div class="mobile-nav">
    <a href="/" class="action active">
        <span class="icon main-icon"></span>
        <p class="text">Главная</p>
    </a>
    <div class="action" x-data @click="$store.mobileCatalog.isOpen = !$store.mobileCatalog.isOpen">
        <span class="icon catalog-icon"></span>
        <p class="text">Каталог Votex</p>
    </div>
    <a href="/" class="action">
        <span class="icon fabrics-icon"></span>
        <p class="text">Ткани</p>
    </a>
    <a href="/" class="action">
        <span class="icon partnership-icon"></span>
        <p class="text">Сотрудничество</p>
    </a>
    <div class="action" x-data @click="$store.mobileMenu.isOpen = !$store.mobileMenu.isOpen">
        <span class="icon menu-icon"></span>
        <p class="text">Меню</p>
    </div>
</div>

<div class="mobile-menu" x-data x-transition x-show="$store.mobileCatalog.isOpen">
    <div class="mobile-menu__body">
        <div class="mobile-menu__content">
            <div class="catalog-menu" x-data="{currentMenu: -1, logo: ''}">
                <div class="wrap" @click.outside="currentMenu = -1; logo = ''" @keyup.escape.window="currentMenu = -1">
                    <? $APPLICATION->IncludeComponent(
                        "bitrix:catalog.section.list",
                        "catalog-tree-menu",
                        array(
                            "ADDITIONAL_COUNT_ELEMENTS_FILTER" => "",
                            "ADD_SECTIONS_CHAIN" => "N",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "N",
                            "CACHE_TIME" => "36000000",
                            "CACHE_TYPE" => "A",
                            "COUNT_ELEMENTS" => "Y",
                            "COUNT_ELEMENTS_FILTER" => "CNT_ALL",
                            "FILTER_NAME" => "",
                            "HIDE_SECTIONS_WITH_ZERO_COUNT_ELEMENTS" => "N",
                            "IBLOCK_ID" => \Placestart\Core\Utils::locateIblock('catalog'),
                            "IBLOCK_TYPE" => "catalog",
                            "SECTION_CODE" => "",
                            "SECTION_FIELDS" => array("", ""),
                            "SECTION_ID" => "",
                            "SECTION_URL" => "",
                            "SECTION_USER_FIELDS" => array("", ""),
                            "SHOW_PARENT_NAME" => "Y",
                            "TOP_DEPTH" => "3",
                            "VIEW_MODE" => "LIST"
                        )
                    ); ?>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-menu mobile-info" x-data x-transition x-show="$store.mobileMenu.isOpen">
    <div class="mobile-menu__body">
        <div class="mobile-menu__content wrap">
            <?= tpl('components/lang-switch', [
                'lang' => 'RU'
            ]) ?>

            <? $APPLICATION->IncludeComponent(
                "bitrix:menu",
                "header-menu",
                array(
                    "ALLOW_MULTI_SELECT" => "N",
                    "CHILD_MENU_TYPE" => "left",
                    "DELAY" => "N",
                    "MAX_LEVEL" => "2",
                    "MENU_CACHE_GET_VARS" => array(""),
                    "MENU_CACHE_TIME" => "360000",
                    "MENU_CACHE_TYPE" => "A",
                    "MENU_CACHE_USE_GROUPS" => "Y",
                    "ROOT_MENU_TYPE" => "top2",
                    "USE_EXT" => "N"
                )
            ); ?>

            <div class="contacts">
                <a href="tel:+7 495 152 20 00" class="tel"><?= sprint_options_get('SITE_PHONE') ?></a>
                <?= tpl('ui/page-link', [
                    'type' => 'button',
                    'text' => 'Заказать звонок'
                ]) ?>
            </div>
        </div>
    </div>
</div>

</div>

</body>

</html>