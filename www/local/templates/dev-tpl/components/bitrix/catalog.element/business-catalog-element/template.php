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

$jsData = [
    'ID' => $arResult['ID'],
    'OFFERS' => $arResult['OFFERS'],
    'SKU_PROPS' => $arResult['SKU_PROPS']
];
?>

<div class="product-page" x-data="ProductPage(<?= tpl_js($jsData) ?>)">
    <section class="product-section">
        <div class="top container container-sm">
            <div class="slider-column">
                <div class="main-swiper swiper" x-ref="mainSwiper">
                    <div class="swiper-wrapper" x-data="FancyboxGallery">
                        <template x-for="imgSrc in currentOffer?.PROPERTIES.PREVIEW_GALLERY.VALUE">
                            <div class="swiper-slide">
                                <div class="content-gallery-item">
                                    <a data-fancybox='product-gallery' :href="imgSrc"
                                        class="content-gallery-item__wrap">
                                        <img :src="imgSrc" loading="lazy" class="content-gallery-item__img">
                                        <span class="content-gallery-item__overlay">
                                            <div class="content-gallery-item__zoom icon zoom-icon"></div>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </template>
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
                <div class="thumbs-wrap">
                    <div class="thumbs-swiper swiper" x-ref="thumbsSwiper">
                        <div class="swiper-wrapper">
                            <template x-for="imgSrc in currentOffer?.PROPERTIES.PREVIEW_GALLERY.VALUE">
                                <div class="swiper-slide">
                                    <img :src="imgSrc" loading="lazy" class="img">
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
            <div class="info-column">
                <h1 class="title h2"><?= $arResult['NAME'] ?></h1>

                <template x-if="showSkuProps">
                    <div class="product-sku-properties">
                        <template x-for="(property, code) in showSkuProps">
                            <div class="product-offer">
                                <template x-if="property.PICTURES.length == 0">
                                    <div>
                                        <p class="product-offer__name p2"
                                            x-text="`${property.NAME}: ${property.CURRENT_VALUE}`"></p>
                                        <template x-if="property.VALUES.length > 1">
                                            <div class="product-offer__values">
                                                <template x-for="value in property.VALUES">
                                                    <button class="product-offer__value"
                                                        :class="property.CURRENT_VALUE == value && 'product-offer__value--active'"
                                                        @click="updateOfferForSelectedProperty(code, value)"
                                                        x-text="value"></button>
                                                </template>
                                            </div>
                                        </template>
                                    </div>
                                </template>
                                <template x-if="property.PICTURES.length > 0">
                                    <div>
                                        <p class="product-offer__name p2"
                                            x-text="`${property.NAME}: ${property.CURRENT_VALUE}`"></p>
                                        <template x-if="property.VALUES.length > 1">
                                            <div class="product-offer__slider">
                                                <div class="product-offer__slider-wrap">
                                                    <div class="swiper" x-ref="colorsSlider" x-init="initColorsSlider">
                                                        <div class="swiper-wrapper">
                                                            <template x-for="(value, index) in property.VALUES">
                                                                <div class="swiper-slide"
                                                                    :class="value === property.CURRENT_VALUE && 'active'"
                                                                    @click="updateOfferForSelectedProperty(code, value)">
                                                                    <img :src="property.PICTURES[index]" loading="lazy"
                                                                        class="img">
                                                                </div>
                                                            </template>
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
                                        </template>
                                    </div>
                                </template>
                            </div>
                        </template>
                    </div>
                </template>

                <div class="props-list">
                    <template x-for="prop in currentOffer.DISPLAY_PROPERTIES">
                        <div class="props-list__row">
                            <p class="props-list__name" x-text="prop.NAME"></p>
                            <div class="props-list__border"></div>
                            <p class="props-list__value" x-text="prop.VALUE"></p>
                        </div>
                    </template>
                </div>

                <div class="marketplace">
                    <template x-if="currentOffer?.PROPERTIES.ARTICUL_OZON.VALUE">
                        <a x-show="currentOffer?.PROPERTIES.ARTICUL_OZON.VALUE"
                            :href="`https://www.ozon.ru/product/${currentOffer?.PROPERTIES.ARTICUL_OZON.VALUE}`"
                            target="_blank" class="marketplace-link">
                            <svg class="marketplace-link__logo" viewBox="0 0 78 77" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <mask id="mask0_260_2632" style="mask-type:luminance" maskUnits="userSpaceOnUse" x="0"
                                    y="0" width="78" height="77">
                                    <path
                                        d="M77.0139 38.2403C77.0139 17.1208 59.8931 0 38.7735 0C17.654 0 0.533203 17.1208 0.533203 38.2403C0.533203 59.3599 17.654 76.4807 38.7735 76.4807C59.8931 76.4807 77.0139 59.3599 77.0139 38.2403Z"
                                        fill="white" />
                                </mask>
                                <g mask="url(#mask0_260_2632)">
                                    <path d="M77.0139 0H0.533203V76.4807H77.0139V0Z" fill="#005BFF" />
                                    <mask id="mask1_260_2632" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0"
                                        y="0" width="78" height="77">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M0.53418 0H77.0149V76.4807H0.53418V0Z" fill="white" />
                                    </mask>
                                    <g mask="url(#mask1_260_2632)">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M38.1954 38.3425L37.0693 33.9802L44.5013 28.9951L53.3903 29.607L54.6878 33.8707L95.2038 77.4562L31.833 96.6598L38.1954 38.3425Z"
                                            fill="#F91155" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M8.66142 51.1268C5.78551 52.3157 2.57257 50.3972 2.129 47.2263C1.82659 45.065 3.01445 42.9361 4.97493 42.1258C7.85095 40.9369 11.0638 42.8554 11.5075 46.026C11.8097 48.1877 10.6218 50.3165 8.66142 51.1268ZM5.34242 37.6272C-0.215829 38.5255 -3.48131 44.3778 -1.45241 49.8056C0.0487214 53.8228 4.18073 56.2897 8.29378 55.625C13.8522 54.7272 17.1176 48.8749 15.0889 43.4466C13.5875 39.4299 9.45548 36.9628 5.34242 37.6272Z"
                                            fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M17.7674 34.4673C16.5181 34.8021 15.8436 36.2205 16.4556 37.467C16.9044 38.3813 17.9717 38.8015 18.9406 38.5419L24.5669 37.0343L18.9553 51.1142C18.7712 51.5761 19.1898 52.0568 19.6655 51.9295L33.3998 48.2492C34.3686 47.9895 35.0827 47.0917 35.0143 46.0756C34.9211 44.6902 33.6279 43.7992 32.3785 44.1342L25.5235 45.9708L31.1308 31.9014C31.3166 31.435 30.8942 30.95 30.4142 31.0786L17.7674 34.4673Z"
                                            fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M72.6165 19.6818C71.729 20.1337 71.3198 21.191 71.5798 22.1616L73.4066 28.9788L60.0752 23.1302C59.6102 22.9264 59.1204 23.3525 59.2523 23.8454L63.0236 37.9201C63.2836 38.8905 64.1666 39.6018 65.1612 39.5494C66.5486 39.4764 67.4357 38.1637 67.0939 36.8879L65.2518 30.0127L78.5832 35.8612C79.0478 36.065 79.538 35.639 79.4057 35.1461L75.6211 21.0202C75.2792 19.7444 73.854 19.0512 72.6165 19.6818Z"
                                            fill="white" />
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M43.9804 26.9855C37.3034 28.7746 32.9474 34.1692 34.2511 39.0347C35.5548 43.9001 42.0244 46.3941 48.7015 44.6048C55.3783 42.8156 59.7346 37.4211 58.4306 32.5557C57.127 27.6902 50.6575 25.1964 43.9804 26.9855ZM45.0821 31.0974C49.695 29.8613 53.8066 31.418 54.4005 33.6356C54.9948 35.8532 52.2128 39.2569 47.5998 40.4929C42.9869 41.7292 38.8753 40.1724 38.2812 37.9548C37.687 35.7372 40.4692 32.3334 45.0821 31.0974Z"
                                            fill="white" />
                                    </g>
                                </g>
                            </svg>
                            <span class="marketplace-link__text button">Купить на Ozon</span>
                        </a>
                    </template>
                    <template x-if="currentOffer?.PROPERTIES.ARTICUL_WB.VALUE">
                        <a :href="`https://www.wildberries.ru/catalog/${currentOffer?.PROPERTIES.ARTICUL_WB.VALUE}/detail.aspx`"
                            target="_blank" class="marketplace-link">
                            <svg class="marketplace-link__logo" viewBox="0 0 77 77" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 38.2403C0 59.3912 17.1422 76.4807 38.2931 76.4807C59.444 76.4807 76.5334 59.3385 76.5334 38.2403C76.5334 17.1422 59.3912 0 38.2931 0C17.1422 0 0 17.1422 0 38.2403Z"
                                    fill="url(#paint0_linear_2050_803)" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M23.6293 50.2149H19.0932L12.3418 26.3213H16.4559L21.4667 44.9931L26.8995 26.3213H30.5389L35.9189 44.9931L40.9297 26.3213H45.0439L38.3452 50.2149H33.8091L28.7456 32.7562L23.6293 50.2149ZM60.8675 37.8198C62.9773 38.9274 64.1904 40.879 64.1904 43.4108C64.1904 45.3623 63.5047 46.9974 62.0806 48.3161C60.6565 49.6347 59.0214 50.2677 56.9643 50.2677H46.7845V26.3213H56.2786C58.2302 26.3213 59.9181 26.9542 61.2367 28.2201C62.6081 29.486 63.2938 31.0684 63.2938 32.9145C63.2938 35.0243 62.4498 36.6066 60.8675 37.8198ZM56.2786 30.0135H50.6876V36.2902H56.2786C58.0192 36.2902 59.3379 34.9188 59.3379 33.1254C59.3379 31.3848 58.0192 30.0135 56.2786 30.0135ZM50.6876 46.5227H57.0171C58.8104 46.5227 60.2873 45.0459 60.2873 43.1998C60.2873 41.301 58.8632 39.8768 57.0171 39.8768H50.6876V46.5227Z"
                                    fill="white" />
                                <defs>
                                    <linearGradient id="paint0_linear_2050_803" x1="18.8007" y1="57.5472" x2="58.1508"
                                        y2="18.57" gradientUnits="userSpaceOnUse">
                                        <stop stop-color="#A92284" />
                                        <stop offset="1" stop-color="#53237D" />
                                    </linearGradient>
                                </defs>
                            </svg>
                            <span class="marketplace-link__text button">Купить на Wildberries</span>
                        </a>
                    </template>
                </div>
            </div>

            <button class="to-wishlist" hx-vals='{"id": "<?= $arResult['ID'] ?>"}'
                hx-post="/bitrix/services/main/ajax.php?action=placestart:wishlist.htmlApi.WishlistApi.toggle"
                hx-target="body" hx-swap="beforeend">
                <span class="icon heart-icon"></span>
            </button>
        </div>
    </section>

    <?php if ($arResult['DETAIL_TEXT']): ?>
        <div class="container container-sm page-block">
            <div class="content-text">
                <h2>Описание</h2>
                <?= $arResult['DETAIL_TEXT'] ?>
            </div>
        </div>
    <?php endif ?>
</div>