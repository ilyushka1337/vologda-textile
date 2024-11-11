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

<div class="grid">
	<?php
	foreach ($arResult["ITEMS"] as $i => $arItem):
		?>
		<div class="post-card">
			<?php if ($arItem['PREVIEW_PICTURE']): ?>
				<img src="<?= $arItem['PREVIEW_PICTURE']['SRC'] ?>" alt="" class="bg">
			<?php endif ?>
			<div class="bottom">
				<p class="name">
					<a href="<?= $arItem['DETAIL_PAGE_URL'] ?>" class="h5 link-cover"><?= $arItem['NAME'] ?></a>
				</p>
				<p class="read-more p2">Подробнее</p>
			</div>
		</div>
	<?php endforeach ?>
</div>
<?php if ($arResult["NAV_STRING"]): ?>
	<?= $arResult["NAV_STRING"] ?>
<?php endif ?>