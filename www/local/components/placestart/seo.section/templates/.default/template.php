<?php if (isset($arResult['TEXT'])): ?>
    <section class="seo-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container container-sm">
            <?= tpl('ui/text-block', [
                'text' => $arResult['TEXT'],
                'imgSrc' => $arResult['IMG'] ? $arResult['IMG']['SRC'] : null,
                'imgPosition' => $arParams['IMG_POSITION']
            ]) ?>
        </div>
    </section>
<?php endif ?>