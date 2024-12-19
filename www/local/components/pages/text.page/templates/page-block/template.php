<section class="text-page <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
	<? $APPLICATION->IncludeComponent(
		"sprint.editor:blocks",
		"custom",
		[
			"ELEMENT_ID" => $arResult["ELEMENT_ID"],
			"IBLOCK_ID" => \Placestart\Core\Utils::locateIblock('textpages'),
			"PROPERTY_CODE" => $arParams["CONTENT_PROPERTY_CODE"],
		]
	); ?>
</section>