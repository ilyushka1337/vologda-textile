<section class="contacts-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <h1 class="h1 block-title">Контакты</h1>
        <div class="grid">
            <div class="map-column">
                <div class="map" x-data="ContactsMap('59.195716, 39.931677', 15)"></div>
            </div>
            <div class="info-column"></div>
        </div>
        <?php dump($arResult) ?>
    </div>
</section>