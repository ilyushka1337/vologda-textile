<?php if (isset($arResult['TEXT']) && $arResult['TEXT']): ?>
    <section class="about-company <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container">
            <div class="text-column">
                <div class="content-text"><?= $arResult['TEXT'] ?></div>
            </div>
            <?php if ($arResult['IMG']): ?>
                <img src="<?= $arResult['IMG']['SRC'] ?>" loading="lazy" class="img">
            <?php endif ?>
        </div>
    </section>
<?php endif ?>