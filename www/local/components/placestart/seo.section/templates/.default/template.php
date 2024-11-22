<?php if ($arResult['TEXT']): ?>
    <section class="seo-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container container-sm">
            <?= tpl('ui/text-block', [
                'title' => $arResult['TITLE'],
                'text' => $arResult['TEXT'],
                'img' => $arResult['IMG'],
                'imgPosition' => $arParams['IMG_POSITION']
            ]) ?>
        </div>
    </section>
<?php endif ?>