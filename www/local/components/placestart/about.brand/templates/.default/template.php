<section class="about-brand <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <div class="text-grid">
            <div class="logo-column">
                <div class="logo">
                    <span class="votex-icon"></span>
                    <p class="text p1">Наш бренд</p>
                </div>
            </div>
            <div class="text-column">
                <div class="column">
                    <?php if ($arResult['TEXT_1']): ?>
                        <div class="content-text">
                            <?= $arResult['TEXT_1'] ?>
                        </div>
                    <?php endif ?>
                </div>
                <div class="column">
                    <?php if ($arResult['TEXT_2']): ?>
                        <div class="content-text">
                            <?= $arResult['TEXT_2'] ?>
                        </div>
                    <?php endif ?>
                    <?= tpl('ui/page-link', [
                        'text' => 'В каталог',
                        'link' => '/catalog/'
                    ]) ?>
                </div>
                <div class="column">
                    <?php if ($arResult['TEXT_3']): ?>
                        <?= $arResult['TEXT_3'] ?>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>