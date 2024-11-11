<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $name
 * @var string $phone
 * @var string $email
 * @var string $status
 * @var string $inputFieldStyle
 * @var array|null $errors
 */
?>

<form class="callback-form" id="feedback-form"
    hx-post="/bitrix/services/main/ajax.php?action=placestart:core.api.Feedback.callback" hx-swap="outerHTML"
    hx-indicator="find .submit-btn">

    <input type="hidden" name="inputFieldStyle" value="<?= $this->e($inputFieldStyle) ?>">

    <div class="form-input form-input--md <?= isset($errors['name']) ? 'form-input--invalid' : '' ?>">
        <input type="text" placeholder="Ваше имя" name="name" value="<?= $name ?>"
            class="form-input__field <?= $this->e($inputFieldStyle) ?> form-input__field--md"></input>
        <?php if (isset($errors['name'])): ?>
            <span class="form-input__error p3">Не корректный ввод</span>
        <?php endif ?>
    </div>

    <div class="form-input form-input--md <?= isset($errors['phone']) ? 'form-input--invalid' : '' ?>">
        <input type="tel" name="phone" value="<?= $phone ?>" x-data="PhoneInputMask('Номер телефона')" x-bind="root"
            class="form-input__field <?= $this->e($inputFieldStyle) ?> form-input__field--md"></input>
        <?php if (isset($errors['phone'])): ?>
            <span class="form-input__error p3">Не корректный ввод</span>
        <?php endif ?>
    </div>

    <div class="form-input form-input--md <?= isset($errors['email']) ? 'form-input--invalid' : '' ?>">
        <input type="email" placeholder="Email" name="email" value="<?= $email ?>"
            class="form-input__field <?= $this->e($inputFieldStyle) ?> form-input__field--md"></input>
        <?php if (isset($errors['email'])): ?>
            <span class="form-input__error p3">Не корректный ввод</span>
        <?php endif ?>
    </div>

    <?= tpl('components/personal') ?>

    <div class="submit-row">
        <?= tpl('ui/submit-btn', [
            'text' => 'Оставить заявку',
            'style' => 'btn--md btn--solid-brown',
            'status' => $status
        ]) ?>
    </div>
</form>