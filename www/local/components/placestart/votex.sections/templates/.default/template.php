<section class="votex-sections <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <div class="top">
            <div class="label-column">
                <div class="label label--gray">о бренде</div>
            </div>
            <div class="text-column">
                <div class="logo-column">
                    <div class="logo">
                        <span class="votex-icon"></span>
                        <p class="text p1">Наш бренд</p>
                    </div>
                </div>
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
                <div class="link-column">
                    <?= tpl('ui/page-link', [
                        'text' => 'Читать о бренде',
                        'link' => '/o-kompanii/o-brende/',
                        'type' => 'link'
                    ]) ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container container-fluid">
        <div class="section-blocks-grid">
            <?= tpl('components/section-block', [
                'imgSrc' => '/local/assets/section-img-home.jpg',
                'overlayLogoSrc' => '/local/assets/logo-home.png',
                'link' => '/catalog/home/'
            ]) ?>

            <?= tpl('components/section-block', [
                'imgSrc' => '/local/assets/section-img-spa.jpg',
                'overlayLogoSrc' => '/local/assets/logo-spa.png',
                'link' => '/catalog/spa/'
            ]) ?>

            <?= tpl('components/section-block', [
                'imgSrc' => '/local/assets/section-img-kids.jpg',
                'overlayLogoSrc' => '/local/assets/logo-kids.png',
                'link' => '/catalog/kids/'
            ]) ?>

            <?= tpl('components/section-block', [
                'imgSrc' => '/local/assets/section-img-premium.jpg',
                'overlayLogoSrc' => '/local/assets/logo-premium.png',
                'link' => '/catalog/premium/'
            ]) ?>
        </div>
    </div>
</section>