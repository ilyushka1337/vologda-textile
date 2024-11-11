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
</head>

<body hx-vals='{"sessid": "<?= bitrix_sessid() ?>"}'>
    <div class="admin-panel">
        <? $APPLICATION->ShowPanel() ?>
    </div>

    <div id="app" class="app-wrap">
        <main id="main">
            <header class="header">
                <div class="container">
                    <a href="/" class="logo">
                        <img src="/local/assets/logo.svg" alt="" class="logo-icon">
                    </a>

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
                            "ROOT_MENU_TYPE" => "top",
                            "USE_EXT" => "N"
                        )
                    ); ?>
                </div>
            </header>