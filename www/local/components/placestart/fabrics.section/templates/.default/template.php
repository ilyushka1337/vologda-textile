<section class="fabrics-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="fullhd-container">
        <img src="/local/assets/decor.svg" alt="" class="decor">
        <div class="container">
            <div class="title-wrap">
                <div class="label label--gray">производство</div>
                <h1 class="h1 title">Ткани</h1>
            </div>

            <div class="text-wrap">
                <div class="content-text">
                    <p>Мы предлагаем широкий выбор готовых тканей разного назначения.</p>
                    <ul>
                        <li>Ткани для постельного белья</li>
                        <li>Ткани для халатов, килтов и банных полотенец</li>
                        <li>Ткани для кухонного и столового текстиля</li>
                        <li>Промышленные ткани</li>
                        <li>Ткани для пледов и покрывал</li>
                    </ul>
                </div>
                <div class="content-text">
                    <p>Наш ассортимент включает в себя ткани высокого качества, подходящие для различных целей —
                        от пошива
                        одежды и предметов интерьера до специализированной одежды</p>
                    <p>Мы гарантируем высокое качество продукции и разнообразие вариантов, чтобы удовлетворить ваши
                        потребности</p>
                </div>
                <?= tpl('ui/page-link', [
                    'type' => 'link',
                    'text' => 'Выбрать ткань',
                    'link' => '/fabrics/'
                ]) ?>
            </div>

            <div class="img-wrap">
                <img src="/local/assets/fabrics-1.jpg" alt="" class="img1">
                <img src="/local/assets/fabrics-2.jpg" alt="" class="img2">
            </div>
        </div>
    </div>
</section>