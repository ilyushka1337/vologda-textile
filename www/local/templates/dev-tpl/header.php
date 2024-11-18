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
        <header class="header">
            <div class="container">
                <a href="/" class="logo">
                    <img src="/local/assets/logo.svg" alt="" class="logo-icon">
                </a>

                <div class="menu-left">
                    <button class="catalog-button" x-data @click="$store.catalogMenu.isOpen = true">
                        <svg class="burger" width="8" height="7" viewBox="0 0 8 7" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 0.5H8" stroke="#BE0F34" />
                            <path d="M0 3.5H8" stroke="#BE0F34" />
                            <path d="M0 6.5H8" stroke="#BE0F34" />
                        </svg>
                        Каталог
                        <svg class="catalog-logo" viewBox="0 0 47 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_2001_159)">
                                <path
                                    d="M23.2643 8.42598C22.9014 7.81891 22.4022 7.34348 21.7658 6.99972C21.1295 6.65595 20.4155 6.48315 19.6228 6.48315C19.493 6.48315 19.3659 6.48955 19.2406 6.4987L18.5384 7.94782C18.8703 7.81525 19.2315 7.74851 19.6228 7.74851C20.1403 7.74851 20.6074 7.86462 21.0216 8.09867C21.4358 8.33181 21.7613 8.65729 21.999 9.07603C22.2358 9.49385 22.3546 9.96288 22.3546 10.4804C22.3546 10.9978 22.2358 11.4669 21.999 11.8847C21.7622 12.3025 21.4367 12.6289 21.0216 12.862C20.6074 13.0952 20.1403 13.2113 19.6228 13.2113C19.1053 13.2113 18.6381 13.0952 18.2239 12.862C17.8098 12.6289 17.4834 12.3034 17.2475 11.8847C17.1232 11.6643 17.0317 11.4303 16.9732 11.1825L16.1787 12.8236C16.5188 13.2945 16.9522 13.6739 17.4815 13.9601C18.1179 14.3038 18.8319 14.4766 19.6237 14.4766C20.4155 14.4766 21.1295 14.3048 21.7667 13.9601C22.4031 13.6154 22.9032 13.1409 23.2652 12.5338C23.6273 11.9267 23.8092 11.2419 23.8092 10.4804C23.8092 9.71877 23.6282 9.03306 23.2652 8.4269"
                                    fill="#434345" />
                                <path
                                    d="M26.5745 7.81523H23.999V6.59377H30.5928V7.81523H28.0173V14.3651H26.5745V7.81523Z"
                                    fill="#434345" />
                                <path
                                    d="M45.0729 14.3651L42.9636 11.412L40.8763 14.3651H39.2334L42.1198 10.4017L39.3888 6.59377H41.0208L43.0084 9.35853L44.9732 6.59377H46.5384L43.8185 10.3459L46.7387 14.3651H45.0729Z"
                                    fill="#434345" />
                                <path
                                    d="M32.413 9.77542C32.4724 9.52857 32.5629 9.29451 32.6873 9.076C32.9241 8.65818 33.2496 8.33178 33.6646 8.09956C34.0788 7.86642 34.5451 7.74939 35.0635 7.74939C35.5819 7.74939 36.0481 7.8655 36.4623 8.09956C36.8765 8.3327 37.202 8.65818 37.4397 9.076C37.564 9.29543 37.6545 9.52857 37.7139 9.77542H32.4139H32.413ZM39.2188 10.985C39.2371 10.8204 39.2481 10.6522 39.2481 10.4794C39.2481 10.2362 39.228 10.0022 39.1905 9.77451C39.1119 9.28903 38.951 8.83829 38.7041 8.42504C38.3411 7.81796 37.8419 7.34254 37.2056 6.99877C36.5693 6.65501 35.8552 6.48221 35.0626 6.48221C34.2699 6.48221 33.5567 6.65409 32.9204 6.99877C32.2841 7.34254 31.784 7.8207 31.4219 8.43144C31.059 9.04217 30.8779 9.72513 30.8779 10.4794C30.8779 11.2337 31.059 11.9176 31.4219 12.5274C31.784 13.1381 32.2841 13.6154 32.9204 13.9591C33.5567 14.3029 34.2708 14.4757 35.0626 14.4757C35.8543 14.4757 36.5684 14.3038 37.2056 13.9591C37.8419 13.6154 38.3411 13.1399 38.7041 12.5329C38.7699 12.4232 38.8275 12.3098 38.8815 12.1946H37.2321C37.0228 12.4661 36.7668 12.6883 36.4614 12.8602C36.0472 13.0933 35.5809 13.2094 35.0626 13.2094C34.5442 13.2094 34.0779 13.0933 33.6637 12.8602C33.2496 12.627 32.9241 12.3016 32.6864 11.8828C32.5291 11.6058 32.4258 11.3059 32.3728 10.9841H39.2188V10.985Z"
                                    fill="#434345" />
                                <path
                                    d="M13.9832 3.05176e-05L11.9736 4.14992L12.7517 5.75721L14.8618 1.4007H20.1536L16.1775 9.6127L15.2623 7.72289L17.6531 2.78491H16.097L13.7053 7.72289L16.1775 12.8264L22.389 3.05176e-05H13.9832Z"
                                    fill="#434345" />
                                <path
                                    d="M8.40491 0H0L6.2134 12.83L6.99145 11.2227L2.2354 1.40067H7.52721L13.8403 14.4364L13.2771 15.5993H9.11073L8.54845 14.4364L10.4136 10.5855L9.63461 8.97816L6.99145 14.4373L8.23303 17H14.1557L15.3945 14.4409L8.40491 0Z"
                                    fill="#434345" />
                            </g>
                            <defs>
                                <clipPath id="clip0_2001_159">
                                    <rect width="46.7385" height="17" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>

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
                    <span class="count">5</span>
                </a>

                <a href="tel:" class="action phone">
                    <span class="icon phone-icon"></span>
                </a>

                <?= tpl('components/lang-switch', [
                    'lang' => 'RU'
                ]) ?>
            </div>
        </header>
        <main id="main">