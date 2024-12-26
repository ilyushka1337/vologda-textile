<section class="fabrics-intro-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <?php if ($arParams['TITLE']): ?>
            <h1 class="title h1"><?= $arParams['TITLE'] ?></h1>
        <?php endif ?>
        <?php if ($arResult['TEXT_1']): ?>
            <div class="text1 content-text">
                <?= $arResult['TEXT_1'] ?>
            </div>
        <?php endif ?>
        <?php if ($arResult['TEXT_2']): ?>
            <div class="text2 content-text">
                <?= $arResult['TEXT_2'] ?>
            </div>
        <?php endif ?>
        <img src="/local/assets/decor.svg" alt="" class="decor">
        <?php if ($arResult['PICTURE_1']): ?>
            <img src="<?= $arResult['PICTURE_1']['SRC'] ?>" loading="lazy" class="img1">
        <?php endif ?>
        <?php if ($arResult['PICTURE_2']): ?>
            <img src="<?= $arResult['PICTURE_2']['SRC'] ?>" loading="lazy" class="img2">
        <?php endif ?>
    </div>
</section>