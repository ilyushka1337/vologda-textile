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
                            <div class="text-column">
                                <h2 class="title h1"><?= $arSlide['TITLE'] ?></h2>
                                <div class="content-text">
                                    <?= $arSlide['TEXT'] ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach ?>
                </div>
                <div class="slider-controls">
                    <div class="slider-pagination" x-ref="pagination"></div>
                    <?= tpl('ui/slider-arrow', [
                        'direction' => 'prev'
                    ]) ?>
                    <?= tpl('ui/slider-arrow', [
                        'direction' => 'next'
                    ]) ?>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>