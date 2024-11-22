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
        <div class="sections">
            <div class="section-block">
                <img src="/local/assets/section-home.png" alt="" class="section-block__logo">
                <img src="/local/assets/section-img-home.png" alt="" class="section-block__img">
                <a href="/catalog/home/" class="section-block__overlay">
                    <img src="/local/assets/logo-home.png" alt="" class="section-block__overlay-logo">
                </a>
            </div>
            <div class="section-block">
                <img src="/local/assets/section-spa.png" alt="" class="section-block__logo">
                <img src="/local/assets/section-img-spa.png" alt="" class="section-block__img">
                <a href="/catalog/spa/" class="section-block__overlay">
                    <img src="/local/assets/logo-spa.png" alt="" class="section-block__overlay-logo">
                </a>
            </div>
            <div class="section-block">
                <img src="/local/assets/section-kids.png" alt="" class="section-block__logo">
                <img src="/local/assets/section-img-kids.png" alt="" class="section-block__img">
                <a href="/catalog/kids/" class="section-block__overlay">
                    <img src="/local/assets/logo-kids.png" alt="" class="section-block__overlay-logo">
                </a>
            </div>
            <div class="section-block">
                <img src="/local/assets/section-premium.png" alt="" class="section-block__logo">
                <img src="/local/assets/section-img-premium.png" alt="" class="section-block__img">
                <a href="/catalog/premium/" class="section-block__overlay">
                    <img src="/local/assets/logo-premium.png" alt="" class="section-block__overlay-logo">
                </a>
            </div>
        </div>
    </div>
</section>