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


<div class="news-grid">
	<?php
	foreach ($arResult['ITEMS'] as $arPost) {
		$date = new \DateTime($arPost['ACTIVE_FROM']);
		echo tpl('components/post-block', [
			'title' => $arPost['NAME'],
			'img' => $arPost['PREVIEW_PICTURE'],
			'date' => $date->format('d.m.Y'),
			'link' => $arPost['DETAIL_PAGE_URL']
		]);
	}
	?>
</div>

<?php if ($arResult["NAV_STRING"]): ?>
	<?= $arResult["NAV_STRING"] ?>
<?php endif ?>