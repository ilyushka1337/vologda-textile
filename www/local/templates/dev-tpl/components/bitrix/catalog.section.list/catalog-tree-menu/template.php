<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<div class="catalog-menu" x-data="{currentMenu: -1, logo: ''}" x-show="$store.catalogMenu.isOpen"
    @keyup.escape.window="$store.catalogMenu.isOpen = false" @click.outside="$store.catalogMenu.isOpen = false">
    <div class="wrap" @click.outside="currentMenu = -1; logo = ''" @keyup.escape.window="currentMenu = -1">
        <div class="left-column">
            <form action="" class="search-form">
                <input class="input" type="search" name="q" placeholder="Поиск">
                <button class="search-btn">
                    <span class="icon search-icon"></span>
                </button>
            </form>
            <div class="menu">
                <?php
                foreach ($arResult['SECTIONS'] as $i => $arSection):
                    switch ($arSection['CODE']) {
                        case 'home';
                            $logo = 'section-home.png';
                            break;
                        case 'spa';
                            $logo = 'section-spa.png';
                            break;
                        case 'kids';
                            $logo = 'section-kids.png';
                            break;
                        case 'premium';
                            $logo = 'section-premium.png';
                            break;
                    }
                    ?>
                    <?php if ($arSection['IS_PARENT']): ?>
                        <div class="item">
                            <a href="<?= $arSection['SECTION_PAGE_URL'] ?>" class="link"
                                @click.prevent="currentMenu = <?= $i ?>; logo = '<?= $logo ?>'"><?= $arSection['NAME'] ?></a>
                        </div>
                    <?php else: ?>
                        <div class="item">
                            <a href="<?= $arSection['SECTION_PAGE_URL'] ?>" class="link"><?= $arSection['NAME'] ?></a>
                        </div>
                    <?php endif ?>
                <?php endforeach ?>
            </div>
            <img :src="`/local/assets/${logo}`" x-show="logo" alt="" class="section-logo">
        </div>
        <div class="right-column">
            <?php foreach ($arResult['SECTIONS'] as $i => $arSection): ?>
                <?php if ($arSection['IS_PARENT']): ?>
                    <div class="submenu" x-show="currentMenu === <?= $i ?>">
                        <p class="title">Home</p>
                        <div class="grid">
                            <?php foreach ($arSection['CHILD'] as $arChild): ?>
                                <div class="column">
                                    <div class="item column-title">
                                        <a href="<?= $arChild['SECTION_PAGE_URl'] ?>" class="link"><?= $arChild['NAME'] ?></a>
                                    </div>
                                    <?php foreach ($arChild['CHILD'] as $arSubChild): ?>
                                        <div class="item">
                                            <a href="<?= $arSubChild['SECTION_PAGE_URl'] ?>" class="link"><?= $arSubChild['NAME'] ?></a>
                                        </div>
                                    <?php endforeach ?>
                                </div>
                            <?php endforeach ?>
                        </div>
                    </div>
                <?php endif ?>
            <?php endforeach ?>
        </div>
    </div>
</div>