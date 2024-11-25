<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $style
 * @var string $text
 */
?>

<button class="submit-btn <?= $this->e($status) ?>">
    <span class="icon loader-icon animation-spin"></span>
    <span class="icon check-icon"></span>
    <span class="submit-btn__text">
        <?= $this->e($text) ?>
    </span>
    <span class="submit-btn__arrow icon arrow-icon"></span>
</button>