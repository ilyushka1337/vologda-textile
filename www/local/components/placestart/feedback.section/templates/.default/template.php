<section class="feedback-section">
    <div class="container">
        <div class="grid">
            <h2 class="title h2">Оставьте заявку и получите оптовый каталог на продукцию</h2>
            <div class="form-col">
                <?= tpl('forms/feedback-form', [
                    'phone' => '',
                    'name' => '',
                    'email' => '',
                    'status' => 'init',
                    'inputFieldStyle' => 'form-input__field--underline-gray'
                ]) ?>
            </div>
        </div>
    </div>
</section>