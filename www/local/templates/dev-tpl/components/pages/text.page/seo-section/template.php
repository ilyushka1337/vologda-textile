<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die(); ?>
<section class="seo-section text-page page-block--top-gap page-block--bottom-gap">
	<div class="container">
		<? $APPLICATION->IncludeComponent(
			"sprint.editor:blocks",
			"custom",
			[
				"ELEMENT_ID" => $arParams["ELEMENT"],
				"IBLOCK_ID" => $arParams["IBLOCK"],
				"PROPERTY_CODE" => $arParams["CONTENT_PROPERTY_CODE"],
			]
		); ?>
	</div>
</section>