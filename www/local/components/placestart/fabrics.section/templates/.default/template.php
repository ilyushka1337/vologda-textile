<section class="fabrics-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="fullhd-container">
        <img src="/local/assets/decor.svg" loading="lazy" class="decor">
        <div class="container">
            <div class="title-wrap">
                <div class="label label--gray">производство</div>
                <?php if ($arParams['TITLE']): ?>
                    <h2 class="h1 title"><?= $arParams['TITLE'] ?></h2>
                <?php endif ?>
            </div>

            <div class="text-wrap">
                <?php if ($arResult['TEXT_1']): ?>
                    <div class="content-text">
                        <?= $arResult['TEXT_1'] ?>
                    </div>
                <?php endif ?>
                <?php if ($arResult['TEXT_2']): ?>
                    <div class="content-text">
                        <?= $arResult['TEXT_2'] ?>
                    </div>
                <?php endif ?>
                <?= tpl('ui/page-link', [
                    'type' => 'link',
                    'text' => 'Выбрать ткань',
                    'link' => '/fabrics/'
                ]) ?>
            </div>

            <div class="img-wrap">
                <?php if ($arResult['PICTURE_1']): ?>
                    <img src="<?= $arResult['PICTURE_1']['SRC'] ?>" loading="lazy" class="img1">
                <?php endif ?>
                <?php if ($arResult['PICTURE_2']): ?>
                    <img src="<?= $arResult['PICTURE_2']['SRC'] ?>" loading="lazy" class="img2">
                <?php endif ?>
            </div>
        </div>
    </div>
</section>