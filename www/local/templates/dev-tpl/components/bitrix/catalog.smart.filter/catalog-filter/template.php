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

use Bitrix\Iblock\SectionPropertyTable;

$this->setFrameMode(true);
?>

<form hx-get="<?= $arResult["FORM_ACTION"] ?>" action="<?= $arResult["FORM_ACTION"] ?>" method="get"
	class="catalog-filter" hx-trigger="change-value" hx-target="#catalog-section" hx-select="#catalog-section"
	hx-swap="outerHTML">
	<input type="hidden" name="set_filter" value="set_filter">
	<? foreach ($arResult["HIDDEN"] as $arItem): ?>
		<input type="hidden" name="<?= $arItem["CONTROL_NAME"] ?>" id="<?= $arItem["CONTROL_ID"] ?>"
			value="<?= $arItem["HTML_VALUE"] ?>" />
	<? endforeach; ?>
	<div class="container">
		<div class="filter-box">
			<?php
			$sortOptions = [
				'popular' => 'По популярности',
				'new' => 'Новинки',
			];
			?>
			<div class="select" x-data="Select(<?= tpl_js($sortOptions) ?>,'<?= $arParams['SORT'] ?>')" x-bind="root">
				<button class="select__value" x-bind="valueRow" type="button">
					<span class="select__value-before">
						<span class="icon sort-icon select__value-icon"></span>
					</span>
					<span class="select__value-text" x-text="text"></span>
					<span class="select__value-after">
						<span class="icon chevron-down-icon select__arrow"
							:class="isOpen && 'select__arrow--rotate'"></span>
					</span>
				</button>
				<div class="select__dropdown" x-bind="dropdown">
					<template x-for="(optionText, optionValue) in options">
						<button class="select__option" :class="optionValue == value && 'select__option--selected'"
							type="button" @click="option(optionValue)">
							<span class="select__option-text" x-text="optionText"></span>
							<span class="select__option-after">
								<span class="icon check-icon"></span>
							</span>
						</button>
					</template>
				</div>
				<input type="hidden" :value="value" name="sort">
			</div>
		</div>
		<?
		foreach ($arResult["ITEMS"] as $key => $arItem):
			if (empty($arItem["VALUES"]))
				continue;

			if (
				$arItem["DISPLAY_TYPE"] === SectionPropertyTable::NUMBERS_WITH_SLIDER
				&& ($arItem["VALUES"]["MAX"]["VALUE"] - $arItem["VALUES"]["MIN"]["VALUE"] <= 0)
			)
				continue;
			?>
			<div class="filter-box">
				<?
				$arCur = current($arItem["VALUES"]);
				switch ($arItem["DISPLAY_TYPE"]) {
					case SectionPropertyTable::DROPDOWN://DROPDOWN
						$selectOptions = [];
						foreach ($arItem["VALUES"] as $val => $ar) {
							$selectOptions[$ar["HTML_VALUE_ALT"]] = $ar['VALUE'];
						}
						?>
						<div class="select" x-data="Select(<?= tpl_js($selectOptions) ?>, 'all')" x-bind="root">
							<button class="select__value" x-bind="valueRow" type="button">
								<?= $arItem['NAME'] ?>
								<span class="icon chevron-down-icon select__arrow"
									:class="isOpen && 'select__arrow--rotate'"></span>
							</button>
							<div class="select__dropdown" x-bind="dropdown">
								<button class="select__option" :class="value == 'all' && 'select__option--selected'" type="button"
									@click="option('all')">
									<span class="select__option-text">Все</span>
									<span class="select__option-after">
										<span class="icon check-icon"></span>
									</span>
								</button>
								<template x-for="(optionText, optionValue) in options">
									<button class="select__option" :class="optionValue == value && 'select__option--selected'"
										type="button" @click="option(optionValue)">
										<span class="select__option-text" x-text="optionText"></span>
										<span class="select__option-after">
											<span class="icon check-icon"></span>
										</span>
									</button>
								</template>
							</div>
							<input type="hidden" :value="value" name="<?= $arCur['CONTROL_NAME_ALT'] ?>">
						</div>
						<?
						break;
				}
				?>
			</div>
		<? endforeach; ?>
	</div>
</form>