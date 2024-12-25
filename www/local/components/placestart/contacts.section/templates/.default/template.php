<section class="contacts-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <h1 class="h1 block-title">Контакты</h1>
        <div class="grid">
            <div class="map-column">
                <div class="map" x-data="ContactsMap('59.195716, 39.931677', 15)"></div>
            </div>
            <div class="info-column">
                <div class="contacts-block">
                    <p class="h2">Данные магазина:</p>
                    <?php if ($arResult['SITE_STORE_PHONE']): ?>
                        <div class="contact">
                            <p class="contact__name">Номер телефона</p>
                            <p class="contact__value"><a href="tel:<?= $arResult['SITE_STORE_PHONE'] ?>"
                                    class="link"><?= $arResult['SITE_STORE_PHONE'] ?></a></p>
                        </div>
                    <?php endif ?>
                    <?php if ($arResult['SITE_STORE_WORK_HOURS']): ?>
                        <div class="contact">
                            <p class="contact__name">Режим работы</p>
                            <p class="contact__value"><?= $arResult['SITE_STORE_WORK_HOURS'] ?></p>
                        </div>
                    <?php endif ?>
                    <div>
                        <?= tpl('ui/page-link', [
                            'link' => 'https://yandex.ru/maps/-/CHE-eV5C',
                            'target' => '_blank',
                            'text' => 'Профиль в Яндекс Картах'
                        ]) ?>
                    </div>
                </div>

                <div class="contacts-block">
                    <p class="h2">Офис производства:</p>
                    <?php if ($arResult['SITE_PRODUCTION_ADDRESS']): ?>
                        <div class="contact">
                            <p class="contact__name">Адрес производства</p>
                            <p class="contact__value"><?= $arResult['SITE_PRODUCTION_ADDRESS'] ?></p>
                        </div>
                    <?php endif ?>
                    <?php if ($arResult['SITE_WORK_HOURS']): ?>
                        <div class="contact">
                            <p class="contact__name">Режим работы</p>
                            <p class="contact__value"><?= $arResult['SITE_WORK_HOURS'] ?></p>
                        </div>
                    <?php endif ?>
                    <?php if ($arResult['SITE_PHONE']): ?>
                        <div class="contact">
                            <p class="contact__name">Номер</p>
                            <p class="contact__value"><a href="tel:<?= $arResult['SITE_PHONE'] ?>"
                                    class="link"><?= $arResult['SITE_PHONE'] ?></a></p>
                        </div>
                    <?php endif ?>
                    <?php if ($arResult['SITE_EMAIL']): ?>
                        <div class="contact">
                            <p class="contact__name">Почта</p>
                            <p class="contact__value"><a href="mailto:<?= $arResult['SITE_EMAIL'] ?>"
                                    class="link"><?= $arResult['SITE_EMAIL'] ?></a></p>
                        </div>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</section>