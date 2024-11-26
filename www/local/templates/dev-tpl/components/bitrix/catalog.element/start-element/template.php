<?
/**
 * @global CMain $APPLICATION
 * @var array $arParams
 * @var array $arResult
 * @var CatalogSectionComponent $component
 * @var CBitrixComponentTemplate $this
 * @var string $templateName
 * @var string $componentPath
 * @var string $templateFolder
 */
?>

<div class="product-page" x-data="ProductPage">
    <section class="product-section">
        <div class="top container container-sm">
            <div class="slider-column">
                <div class="thumbs-wrap">
                    <div class="thumbs-swiper swiper" x-ref="thumbsSwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                            <div class="swiper-slide">
                                <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="main-swiper swiper" x-ref="mainSwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                        <div class="swiper-slide">
                            <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                        </div>
                    </div>
                </div>
                <?= tpl('ui/slider-arrow', [
                    'direction' => 'prev',
                    'attrs' => 'x-ref="mainSliderPrev"'
                ]) ?>
                <?= tpl('ui/slider-arrow', [
                    'direction' => 'next',
                    'attrs' => 'x-ref="mainSliderNext"'
                ]) ?>
            </div>
            <div class="info-column">
                <h1 class="title h2">Халат банный вафельный с поясом</h1>

                <div class="product-offer">
                    <p class="product-offer__name p2">Цвет: серый</p>
                    <div class="product-offer__slider">
                        <div class="product-offer__slider-wrap">
                            <div class="swiper" x-ref="colorsSlider">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                                    </div>
                                    <div class="swiper-slide">
                                        <img src="/local/assets/product-slide.jpg" loading="lazy" class="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?= tpl('ui/slider-arrow', [
                            'direction' => 'prev',
                            'attrs' => 'x-ref="colorsSliderPrev"'
                        ]) ?>
                        <?= tpl('ui/slider-arrow', [
                            'direction' => 'next',
                            'attrs' => 'x-ref="colorsSliderNext"'
                        ]) ?>
                    </div>
                </div>
                <div class="product-offer">
                    <p class="product-offer__name p2">Размер постельного белья:</p>
                    <div class="product-offer__values">
                        <button class="product-offer__value product-offer__value--active">1,5-спальное</button>
                        <button class="product-offer__value">1,5-спальное</button>
                        <button class="product-offer__value">1,5-спальное</button>
                        <button class="product-offer__value">1,5-спальное</button>
                    </div>
                </div>

                <div class="props-list">
                    <div class="props-list__row">
                        <p class="props-list__name">Артикул</p>
                        <div class="props-list__border"></div>
                        <p class="props-list__value">231579975</p>
                    </div>
                    <div class="props-list__row">
                        <p class="props-list__name">Состав</p>
                        <div class="props-list__border"></div>
                        <p class="props-list__value">хлопок; страйп-сатин</p>
                    </div>
                    <div class="props-list__row">
                        <p class="props-list__name">Размер полотенца</p>
                        <div class="props-list__border"></div>
                        <p class="props-list__value">44x90 см; 67х140 см; 2 шт</p>
                    </div>
                </div>
            </div>

            <button class="to-wishlist" @click="addToWishlist">
                <span class="icon heart-icon"></span>
            </button>
        </div>
    </section>


    <template x-teleport="body" x-data="Alert(false, 5)" x-model="isAddedToWishlist" x-bind="root">
        <div class="alert alert--success alert--bottom-right" x-bind="root">
            <div class="alert__body">
                <p class="alert__title">Товар "Халат банный вафельный с поясом"</p>
                <p class="alert__text">добавлен в избранное</p>
            </div>
            <button class="alert__close" x-bind="close">
                <span class="icon cross-icon"></span>
            </button>
            <div class="alert__timer" x-bind="timer"></div>
        </div>
    </template>
</div>