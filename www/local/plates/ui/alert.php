<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $position
 * @var string $variant
 * @var string $title
 * @var string $text
 * @var integer|null $timeOut
 * @var bool $isOpen
 */

if ($timeOut === null)
    $timeOut = 5;
?>

<div class="alert alert--<?= $variant ?> alert--<?= $position ?>"
    x-data="Alert(<?= $isOpen ? "true" : "false" ?>, '<?= $timeOut ?>', true)" x-bind="root">
    <div class="alert__body">
        <p class="alert__title"><?= $this->e($title) ?></p>
        <p class="alert__text"><?= $this->e($text) ?></p>
    </div>
    <button class="alert__close" x-bind="close">
        <span class="icon cross-icon"></span>
    </button>
    <div class="alert__timer" x-bind="timer"></div>
</div>