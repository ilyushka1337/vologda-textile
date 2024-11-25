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

<div class="catalog-sections-grid">
    <?php foreach ($arResult['SECTIONS'] as $arSection): ?>
        <div class="section-img-block">
            <?php if ($arSection['PICTURE']): ?>
                <img src="<?= $arSection['PICTURE']['SRC'] ?>" alt="" class="img">
            <?php endif ?>
            <p class="name p1">
                <a href="<?= $arSection['SECTION_PAGE_URL'] ?>" class="link-cover"><?= $arSection['NAME'] ?></a>
            </p>
        </div>
    <?php endforeach ?>
</div>