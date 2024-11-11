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

<div class="alert alert--bottom-right alert--success"
    x-data="Alert(<?= $isOpen ? "true" : "false" ?>, '<?= $timeOut ?>')" x-bind="root">
    <div class="alert__body">
        <p class="alert__title"><?= $title ?></p>
        <p class="alert__text"><?= $text ?></p>
    </div>
    <button class="alert__close" x-bind="close">
        <span class="icon cross-icon"></span>
    </button>
</div>