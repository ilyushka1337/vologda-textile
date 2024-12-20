<?
use Bitrix\Main\Loader;

Loader::requireModule('sprint.options');

$siteVK = sprint_options_get('SITE_VK');
$siteTelegram = sprint_options_get('SITE_TELEGRAM');
$siteOK = sprint_options_get('SITE_OK');
$siteYoutube = sprint_options_get('SITE_YOUTUBE');
$siteWildberries = sprint_options_get('SITE_WILDBERRIES');
$siteOzon = sprint_options_get('SITE_OZON');
?>


</main>
<?
$APPLICATION->IncludeComponent('placestart:feedback.section', '', [
    'IS_PAGE_BLOCK' => 'N'
]);
?>
<footer class="footer">
    <div class="top">
        <div class="container">
            <div class="contacts-column">
                <div class="contact address p1"><?= sprint_options_get('SITE_STORE_ADDRESS') ?></div>
                <div class="contact work-hours p1"><?= sprint_options_get('SITE_WORK_HOURS') ?></div>
                <div class="callback">
                    <a href="tel:<?= sprint_options_get('SITE_PHONE') ?>"
                        class="tel button"><?= sprint_options_get('SITE_PHONE') ?></a>
                </div>
            </div>
            <nav class="menu-column">
                <a href="/catalog/home/" class="link button">Home</a>
                <a href="/catalog/spa/" class="link button">Spa</a>
                <a href="/catalog/kids/" class="link button">Kids</a>
                <a href="/catalog/premium/" class="link button">Premium</a>
            </nav>
            <div class="social-column">
                <p class="text p2">Мы в соцсетях:</p>
                <?php if ($siteVK): ?>
                    <div>
                        <?= tpl('ui/page-link', [
                            'type' => 'link',
                            'text' => 'ВКонтакте',
                            'link' => $siteVK,
                            'target' => '_blank'
                        ]) ?>
                    </div>
                <?php endif ?>
                <?php if ($siteTelegram): ?>
                    <div>
                        <?= tpl('ui/page-link', [
                            'type' => 'link',
                            'text' => 'Телеграмм',
                            'link' => $siteTelegram,
                            'target' => '_blank'
                        ]) ?>
                    </div>
                <?php endif ?>
                <?php if ($siteOK): ?>
                    <div>
                        <?= tpl('ui/page-link', [
                            'type' => 'link',
                            'text' => 'Одноклассники',
                            'link' => $siteOK,
                            'target' => '_blank'
                        ]) ?>
                    </div>
                <?php endif ?>
                <?php if ($siteYoutube): ?>
                    <div>
                        <?= tpl('ui/page-link', [
                            'type' => 'link',
                            'text' => 'YouTube',
                            'link' => $siteYoutube,
                            'target' => '_blank'
                        ]) ?>
                    </div>
                <?php endif ?>
            </div>
            <div class="marketplace-column">
                <p class="text p2">Мы на маркетплейсах:</p>
                <?php if ($siteWildberries): ?>
                    <?= tpl('ui/wildberries-link', [
                        'link' => $siteWildberries
                    ]) ?>
                <?php endif ?>
                <?php if ($siteOzon): ?>
                    <?= tpl('ui/ozon-link', [
                        'link' => $siteOzon
                    ]) ?>
                <?php endif ?>
            </div>
        </div>
    </div>
    <div class="bottom">
        <div class="container">
            <p class="p2">© ООО "Вологодский текстильный комбинат", <?= date('Y') ?></p>
            <a href="/privacy-policy/" class="link p2">Политика конфиденциальности</a>
            <a href="https://place-start.ru/" target="_blank" class="link ps-link p2">
                Сделано в
                <span class="icon ps-icon"></span>
            </a>
        </div>
    </div>
</footer>

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
    <a href="/fabrics/" class="action">
        <span class="icon fabrics-icon"></span>
        <p class="text">Ткани</p>
    </a>
    <a href="/partnership/" class="action">
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
                <a href="tel:+7 495 152 20 00" class="tel button"><?= sprint_options_get('SITE_PHONE') ?></a>
            </div>
        </div>
    </div>
</div>

</div>

</body>

</html>