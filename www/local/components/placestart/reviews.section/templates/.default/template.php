<?php if (count($arResult['REVIEWS']) > 0): ?>
    <section class="reviews-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container">
            <div class="top">
                <div class="label-column">
                    <div class="label label--gray">о бренде</div>
                </div>
                <div class="text-column">
                    <h2 class="title h1">Ваше мнение о наших товарах</h2>
                </div>
            </div>

            <div class="slider" x-data="ReviewsSlider">
                <div class="swiper" x-ref="swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($arResult['REVIEWS'] as $arReview): ?>
                            <div class="swiper-slide">
                                <img src="<?= $arReview['IMG']['SRC'] ?>" loading="lazy" class="img">
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="swiper-scrollbar" x-ref="scrollbar"></div>
            </div>


            <div class="marketplace">
                <p class="text button">Читайте отзывы на маркетплейсах:</p>
                <?= tpl('ui/wildberries-link', [
                    'link' => 'https://wildberries.ru/'
                ]) ?>
                <?= tpl('ui/ozon-link', [
                    'link' => 'https://ozon.ru/'
                ]) ?>
            </div>
        </div>
    </section>
<?php endif ?>