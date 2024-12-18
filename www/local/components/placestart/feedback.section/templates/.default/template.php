<section class="feedback-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <div class="grid">
            <div class="img-col">
                <img src="/local/assets/callback-img.png" loading="lazy" class="img">
            </div>
            <div class="form-col" id="feedback-form">
                <h2 class="title h2">Возникли вопросы?</h2>
                <p class="text p1">Оставьте свои контактные данные и мы свяжемся с вами в ближайшее время</p>
                <?= tpl('forms/callback-form', [
                    'phone' => '',
                    'status' => 'init'
                ]) ?>
            </div>
        </div>
    </div>
</section>