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

<div class="left-column">
    <form action="/catalog/" class="search-form p2">
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
                <div class="item button">
                    <a href="<?= $arSection['SECTION_PAGE_URL'] ?>" class="link"
                        @click.prevent="currentMenu = <?= $i ?>; logo = '<?= $logo ?>'"><?= $arSection['NAME'] ?></a>
                </div>
            <?php else: ?>
                <div class="item button">
                    <a href="<?= $arSection['SECTION_PAGE_URL'] ?>" class="link"><?= $arSection['NAME'] ?></a>
                </div>
            <?php endif ?>
        <?php endforeach ?>
        <div class="item button">
            <a href="/catalog/new/" class="link">Новинки</a>
        </div>
    </div>
    <template x-if="logo">
        <img :src="`/local/assets/${logo}`" alt="" class="section-logo">
    </template>
</div>
<div class="right-column">
    <?php foreach ($arResult['SECTIONS'] as $i => $arSection): ?>
        <?php if ($arSection['IS_PARENT']): ?>
            <div class="submenu" x-show="currentMenu === <?= $i ?>">
                <p class="title h2"><?= $arSection['NAME'] ?></p>
                <div class="grid">
                    <?php foreach ($arSection['CHILD'] as $arChild): ?>
                        <div class="column">
                            <div class="item p2 column-title">
                                <a href="<?= $arChild['SECTION_PAGE_URL'] ?>" class="link"><?= $arChild['NAME'] ?></a>
                            </div>
                            <?php foreach ($arChild['CHILD'] as $arSubChild): ?>
                                <div class="item p2">
                                    <a href="<?= $arSubChild['SECTION_PAGE_URL'] ?>" class="link"><?= $arSubChild['NAME'] ?></a>
                                </div>
                            <?php endforeach ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        <?php endif ?>
    <?php endforeach ?>
</div>