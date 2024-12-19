<?php if (count($arResult['SLIDES']) > 0): ?>
    <section class="main-slider <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container">
            <div class="swiper" x-data="MainSlider">
                <div class="swiper-wrapper">
                    <?php foreach ($arResult['SLIDES'] as $arSlide): ?>
                        <div class="swiper-slide">
                            <?php if ($arSlide['IMG']): ?>
                                <img src="<?= $arSlide['IMG']['SRC'] ?>" loading="lazy" class="bg">
                            <?php endif ?>
                            <?php if ($arSlide['LINK']): ?>
                                <a href="<?= $arSlide['LINK'] ?>" class="link-cover"></a>
                            <?php endif ?>
                            <div class="text-column">
                                <?php if ($arSlide['TITLE']): ?>
                                    <h2 class="title h1"><?= $arSlide['TITLE'] ?></h2>
                                <?php endif ?>
                                <?php if ($arSlide['TEXT']): ?>
                                    <div class="content-text">
                                        <?= $arSlide['TEXT'] ?>
                                    </div>
                                <?php endif ?>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <?php if (count($arResult['SLIDES']) > 1): ?>
                    <div class="slider-controls">
                        <div class="slider-pagination" x-ref="pagination"></div>
                        <?= tpl('ui/slider-arrow', [
                            'direction' => 'prev'
                        ]) ?>
                        <?= tpl('ui/slider-arrow', [
                            'direction' => 'next'
                        ]) ?>
                    </div>
                <?php endif ?>
            </div>
        </div>
    </section>
<?php endif ?>