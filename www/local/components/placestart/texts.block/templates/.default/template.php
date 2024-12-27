<section class="texts-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container container-sm">
        <?php foreach ($arResult['ELEMENS'] as $elem): ?>
            <div class="block">
                <h2 class="title h2"><?= $elem['NAME'] ?></h2>
                <div class="content-text"><?= $elem['PREVIEW_TEXT'] ?></div>
            </div>
        <?php endforeach ?>
    </div>
</section>