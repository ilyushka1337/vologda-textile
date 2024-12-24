<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $phone
 * @var string $fio
 * @var string $comment
 * @var string $status
 * @var array|null $errors
 */
?>

<form class="order-form" id="feedback-form"
    hx-post="/bitrix/services/main/ajax.php?mode=class&c=placestart:order-form.section&action=order" hx-swap="outerHTML"
    hx-indicator="find .submit-btn">

    <div class="fio-input form-input <?= isset($errors['fio']) ? 'form-input--invalid' : '' ?>">
        <input type="text" required name="fio" value="<?= $fio ?>" placeholder="Ваше ФИО"
            class="form-input__field form-input__field--underline-gray form-input__field--md"></input>
    </div>

    <div class="form-input <?= isset($errors['phone']) ? 'form-input--invalid' : '' ?>">
        <input type="tel" required name="phone" value="<?= $phone ?>" x-data="PhoneInputMask('Номер телефона')"
            x-bind="root" class="form-input__field form-input__field--underline-gray form-input__field--md"></input>
    </div>

    <div class="form-input <?= isset($errors['email']) ? 'form-input--invalid' : '' ?>">
        <input type="email" required name="email" value="<?= $email ?>" placeholder="Email"
            class="form-input__field form-input__field--underline-gray form-input__field--md"></input>
    </div>

    <div class="form-input <?= isset($errors['comment']) ? 'form-input--invalid' : '' ?>">
        <textarea rows="4"
            class="form-input__field form-input__textarea form-input__textarea--outline-gray form-input__textarea--md"
            name="comment" placeholder="Комментарий к заказу"><?= $this->e($comment) ?></textarea>
    </div>

    <div class="submit-column">
        <?= tpl('ui/submit-btn', [
            'text' => 'Оставить заявку',
            'style' => 'btn--md btn--solid-brown',
            'status' => $status
        ]) ?>
        <?= tpl('components/personal') ?>
    </div>
</form>