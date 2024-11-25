<?
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */
?>

<div class="product-item">
    <?php if ($arResult['ITEM']['PREVIEW_PICTURE']): ?>
        <img src="<?= $arResult['ITEM']['PREVIEW_PICTURE']['SRC'] ?>" loading="lazy" class="img">
    <?php endif ?>
    <p class="name p1">
        <a href="<?= $arResult['ITEM']['DETAIL_PAGE_URL'] ?>" class="link-cover"><?= $arResult['ITEM']['NAME'] ?></a>
    </p>
</div>