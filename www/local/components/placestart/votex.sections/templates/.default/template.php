<section class="votex-sections <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <div class="top">
            <div class="label-column">
                <div class="label label--gray">о бренде</div>
            </div>
            <div class="text-column">
                <div class="logo-column">
                    <div class="logo">
                        <span class="icon votex-icon"></span>
                        <p class="text p1">Наш бренд</p>
                    </div>
                </div>
                <p class="text p1"> – бренд готовых текстильных решений для дома от ведущего российского
                    производителя,
                    Вологодского текстильного комбината</p>
                <p class="text p1">Продукция представлена на основных электронных площадках России, что позволяет
                    получать
                    быструю обратную связь от конечного потребителя, поддерживая продажи в эпоху цифровой
                    трансформации.</p>
                <div class="link-column">
                    <?= tpl('ui/page-link', [
                        'text' => 'Читать о бренде',
                        'link' => '/',
                        'type' => 'link'
                    ]) ?>
                </div>
                <p class="text p1">Современное европейское оборудование позволяет выпускать качественные и
                    безопасные
                    ткани
                    для пошива готовой продукции</p>

            </div>
        </div>
    </div>
    <div class="container container-fluid">
        <div class="section-blocks-grid">
            <?= tpl('components/section-block', [
                'logoSrc' => '/local/assets/section-home.png',
                'imgSrc' => '/local/assets/section-img-home.png',
                'overlayLogoSrc' => '/local/assets/logo-home.png',
                'link' => '/catalog/home/'
            ]) ?>

            <?= tpl('components/section-block', [
                'logoSrc' => '/local/assets/section-spa.png',
                'imgSrc' => '/local/assets/section-img-spa.png',
                'overlayLogoSrc' => '/local/assets/logo-spa.png',
                'link' => '/catalog/spa/'
            ]) ?>

            <?= tpl('components/section-block', [
                'logoSrc' => '/local/assets/section-kids.png',
                'imgSrc' => '/local/assets/section-img-kids.png',
                'overlayLogoSrc' => '/local/assets/logo-kids.png',
                'link' => '/catalog/kids/'
            ]) ?>

            <?= tpl('components/section-block', [
                'logoSrc' => '/local/assets/section-premium.png',
                'imgSrc' => '/local/assets/section-img-premium.png',
                'overlayLogoSrc' => '/local/assets/logo-premium.png',
                'link' => '/catalog/premium/'
            ]) ?>
        </div>
    </div>
</section>