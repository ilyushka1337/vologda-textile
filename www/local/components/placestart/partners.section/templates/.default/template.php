<?php if (count($arResult['PARTNERS']) > 0): ?>
    <section class="partners-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container">
            <div class="top">
                <div class="label-column">
                    <div class="label label--gray">партнёры</div>
                </div>
                <div class="text-column">
                    <h2 class="title h1">Благодарим вас за доверие</h2>
                </div>
            </div>
        </div>
        <div class="partners-slider" x-data="PartnersSlider">
            <div class="container">
                <div class="swiper" x-ref="swiper">
                    <div class="swiper-wrapper">
                        <?php foreach ($arResult['PARTNERS'] as $arPartner): ?>
                            <div class="swiper-slide">
                                <img src="<?= $arPartner['IMG']['SRC'] ?>" alt="" class="img">
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>