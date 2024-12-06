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

$currentOffer = $arResult['ITEM']['OFFERS'][0];
?>

<div class="product-item">
    <?php if ($currentOffer['PREVIEW_PICTURE']): ?>
        <img src="<?= $currentOffer['PREVIEW_PICTURE']['SRC'] ?>" loading="lazy" class="img">
    <?php endif ?>
    <p class="name p1">
        <a href="<?= $arResult['ITEM']['DETAIL_PAGE_URL'] ?>" class="link-cover"><?= $arResult['ITEM']['NAME'] ?></a>
    </p>
</div>