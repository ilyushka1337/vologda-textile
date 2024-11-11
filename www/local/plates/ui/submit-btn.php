<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $style
 * @var string $text
 */
?>

<button class="submit-btn btn <?= $this->e($style) ?> <?= $this->e($status) ?>">
    <span class="icon loader-icon animation-spin"></span>
    <span class="icon check-icon"></span>
    <?= $this->e($text) ?>
</button>