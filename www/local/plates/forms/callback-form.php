<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $phone
 * @var string $status
 * @var array|null $errors
 */
?>

<form class="callback-form" id="feedback-form"
    hx-post="/bitrix/services/main/ajax.php?action=placestart:core.api.Feedback.callback" hx-swap="outerHTML"
    hx-indicator="find .submit-btn">

    <div class="form-input <?= isset($errors['phone']) ? 'form-input--invalid' : '' ?>">
        <input type="tel" name="phone" value="<?= $phone ?>" x-data="PhoneInputMask('Номер телефона')" x-bind="root"
            class="form-input__field form-input__field--underline-gray form-input__field--md"></input>
    </div>

    <?= tpl('ui/submit-btn', [
        'text' => 'Оставить заявку',
        'style' => 'btn--md btn--solid-brown',
        'status' => $status
    ]) ?>
    <?= tpl('components/personal') ?>
</form>