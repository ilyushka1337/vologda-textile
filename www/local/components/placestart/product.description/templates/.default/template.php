<?php if ($arResult["TEXT_ID"]): ?>
    <section class="product-description <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <? $APPLICATION->IncludeComponent(
            "sprint.editor:blocks",
            "custom",
            [
                "ELEMENT_ID" => $arResult["TEXT_ID"],
                "IBLOCK_ID" => \Placestart\Core\Utils::locateIblock('textpages'),
                "PROPERTY_CODE" => "CONTENT",
            ]
        ); ?>
    </section>
<?php endif ?>