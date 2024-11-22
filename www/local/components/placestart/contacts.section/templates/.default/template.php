<section class="contacts-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <h1 class="h1 page-title">Контакты</h1>
    </div>
    <div class="top-cover"></div>
    <div class="container">
        <div class="row">
            <p class="city h2"><?= $arParams['CITY'] ?></p>
            <div>
                <?php if ($arResult['address']): ?>
                    <p class="address h3"><?= $arResult['address'] ?></p>
                <?php endif ?>
                <?php if ($arResult['work_hours']): ?>
                    <p class="work-hours p2"><?= $arResult['work_hours'] ?></p>
                <?php endif ?>
            </div>
            <?php if ($arResult['email']): ?>
                <a href="mailto:<?= $arResult['email'] ?>" class="email h3 link"><?= $arResult['email'] ?></a>
            <?php endif ?>
            <?php if ($arResult['tel']): ?>
                <a href="tel:<?= $arResult['tel'] ?>" class="tel h3 link"><?= $arResult['tel'] ?></a>
            <?php endif ?>
            <?php if ($arResult['map_link']): ?>
                <a href="<?= $arResult['map_link'] ?>" target="_blank" class="map-link p2-bold link">Открыть на карте</a>
            <?php endif ?>
        </div>
    </div>
</section>