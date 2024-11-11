<?php if ($arResult['TEXT']): ?>
    <section class="seo-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <?= tpl('components/text-block', [
            'title' => $arResult['TITLE'],
            'text' => $arResult['TEXT'],
            'img' => $arResult['IMG']
        ]) ?>
    </section>
<?php endif ?>