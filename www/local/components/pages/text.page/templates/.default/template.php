<section class="text-page page-block">
	<div class="container">
		<? $APPLICATION->IncludeComponent(
			"sprint.editor:blocks",
			"custom",
			[
				"ELEMENT_ID" => $arParams["ELEMENT_ID"],
				"IBLOCK_ID" => $arParams["IBLOCK_ID"],
				"PROPERTY_CODE" => $arParams["CONTENT_PROPERTY_CODE"],
			]
		); ?>
	</div>
</section>