<section class="order-form-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <div class="text-column">
            <div class="content-text">
                <h2>Хотите сделать заказ?</h2>
                <p>Оставьте заявку, и мы отправим вам все подходящие варианты из каталога</p>
                <p>Наши менеджеры отлично знают ассортимент и помогут найти ткани по вашему запросу: составу, цвету
                    или материалу.</p>
            </div>
        </div>
        <div class="form-column">
            <?= tpl('forms/order-form', [
                'phone' => '',
                'status' => 'init'
            ]) ?>
        </div>
        <div class="contacts">
            <p class="p1">или свяжитесь с нами</p>
            <?php if ($arResult['SITE_PHONE']): ?>
                <a class="h2 link" href="mailto:<?= $arResult['SITE_PHONE'] ?>"><?= $arResult['SITE_PHONE'] ?></a>
            <?php endif ?>
            <?php if ($arResult['SITE_EMAIL']): ?>
                <a class="h2 link" href="mailto:<?= $arResult['SITE_EMAIL'] ?>"><?= $arResult['SITE_EMAIL'] ?></a>
            <?php endif ?>
        </div>
    </div>
</section>