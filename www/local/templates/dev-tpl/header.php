<?php
use Placestart\Wishlist\Wishlist;
use Bitrix\Main\Loader;
Loader::requireModule('placestart.wishlist');
Loader::requireModule('sprint.options');
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <? $APPLICATION->ShowHead(); ?>
    <title><? $APPLICATION->ShowTitle() ?></title>
    <link rel="shortcut icon" href="/local/assets/favicon.svg">
    <link rel="canonical"
        href="<?= $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?><?= $APPLICATION->GetCurPage() ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url"
        content="<?= $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?><?= $APPLICATION->GetCurPage() ?>">
    <meta property="og:title" content="<? $APPLICATION->ShowTitle() ?>">
    <meta property="og:description" content="<? $APPLICATION->ShowProperty("description") ?>">
    <meta property="og:image"
        content="<?= $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?>/local/assets/favicon.svg">
    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url"
        content="<?= $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?><?= $APPLICATION->GetCurPage() ?>">
    <meta property="twitter:title" content="<? $APPLICATION->ShowTitle() ?>">
    <meta property="twitter:description" content="<? $APPLICATION->ShowProperty("description") ?>">
    <meta property="twitter:image"
        content="<?= $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["HTTP_HOST"] ?>/local/assets/favicon.svg">
    <script>
        window.sessid = "<?= bitrix_sessid() ?>"
    </script>

    <?php Placestart\Core\ViteAssets::loadFrontend() ?>
    <?php
    $wishlist = new Wishlist('WISHLIST');
    ?>

    <script>window.gtranslateSettings = { "default_language": "ru", "languages": ["ru", "en"], "wrapper_selector": "#lang-switch, #lang-switch-mobile" }</script>
    <script src="https://cdn.gtranslate.net/widgets/latest/lc.js" defer></script>
</head>

<body hx-vals='{"sessid": "<?= bitrix_sessid() ?>"}'>
    <div class="admin-panel">
        <? $APPLICATION->ShowPanel() ?>
    </div>

    <div id="app" class="app-wrap">
        <header class="header">
            <div class="container">
                <a href="/" class="logo">
                    <img src="/local/assets/logo.svg" alt="" class="logo-icon">
                </a>

                <div class="menu-left">
                    <button class="catalog-button p2" x-data @click="$store.catalogMenu.isOpen = true">
                        <svg class="burger" width="8" height="7" viewBox="0 0 8 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0.5H8" stroke="#BE0F34" />
                            <path d="M0 3.5H8" stroke="#BE0F34" />
                            <path d="M0 6.5H8" stroke="#BE0F34" />
                        </svg>
                        Каталог
                        <span class="votex-2-icon"></span>
                    </button>

                    <? $APPLICATION->IncludeComponent(
                        "bitrix:menu",
                        "header-menu",
                        array(
                            "ALLOW_MULTI_SELECT" => "N",
                            "CHILD_MENU_TYPE" => "left",
                            "DELAY" => "N",
                            "MAX_LEVEL" => "1",
                            "MENU_CACHE_GET_VARS" => array(""),
                            "MENU_CACHE_TIME" => "360000",
                            "MENU_CACHE_TYPE" => "A",
                            "MENU_CACHE_USE_GROUPS" => "Y",
                            "ROOT_MENU_TYPE" => "top1",
                            "USE_EXT" => "N"
                        )
                    ); ?>
                </div>

                <div class="menu-right">
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
                </div>

                <a href="/wishlist/" class="action">
                    <span class="icon heart-icon"></span>
                    <?= tpl('components/total-wishlist-count', [
                        'count' => count($wishlist->getWishlist())
                    ]) ?>
                </a>

                <a href="tel:<?= sprint_options_get('SITE_PHONE') ?>" class="action phone">
                    <span class="icon phone-icon"></span>
                </a>

                <div class="lang-switch p2" id="lang-switch">
                </div>
            </div>
        </header>
        <main id="main">