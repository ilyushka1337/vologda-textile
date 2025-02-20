<?php
use Placestart\Core\Utils;
?>
<?php if (count($arResult['REVIEWS']) > 0): ?>
    <section class="reviews-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container">
            <div class="top">
                <div class="label-column">
                    <div class="label label--gray">отзывы</div>
                </div>
                <div class="text-column">
                    <?php if ($arParams['TITLE']): ?>
                        <h2 class="title h1">
                            <?= Utils::wrapGroup('<span class="red-text">$1<span>', $arParams['TITLE']) ?>
                        </h2>
                    <?php endif ?>
                </div>
            </div>

            <div class="slider" x-data="ReviewsSlider">
                <div class="swiper" x-ref="swiper">
                    <div class="swiper-wrapper" x-data="FancyboxGallery">
                        <?php foreach ($arResult['REVIEWS'] as $arReview): ?>
                            <div class="swiper-slide">
                                <?= tpl('ui/gallery-item', [
                                    'detailUrl' => $arReview['IMG']['SRC'],
                                    'previewUrl' => $arReview['IMG']['SRC'],
                                ]) ?>
                            </div>
                        <?php endforeach ?>
                    </div>
                </div>
                <div class="swiper-scrollbar" x-ref="scrollbar"></div>
            </div>


            <div class="marketplace">
                <p class="text button">Читайте отзывы на маркетплейсах:</p>
                <?php if ($arResult['SITE_WILDBERRIES']): ?>
                    <?= tpl('ui/wildberries-link', [
                        'link' => $arResult['SITE_WILDBERRIES']
                    ]) ?>
                <?php endif ?>
                <?php if ($arResult['SITE_OZON']): ?>
                    <?= tpl('ui/ozon-link', [
                        'link' => $arResult['SITE_OZON']
                    ]) ?>
                <?php endif ?>
            </div>
        </div>
    </section>
<?php endif ?>