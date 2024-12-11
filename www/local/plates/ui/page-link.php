<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $link
 * @var string $text
 * @var string $type
 * @var string $target
 * @var string $arrowRotation
 */

$arrowRotation = $arrowRotation ?? 'top-right';
?>

<?php if ($type == 'link'): ?>
    <a href="<?= $this->e($link) ?>" target="<?= $this->e($target) ?>" class="page-link link button">
        <?= $this->e($text) ?>
        <span class="page-link__arrow icon arrow-icon"></span>
    </a>
<?php elseif ($type == 'button'): ?>
    <button class="page-link link button">
        <?= $this->e($text) ?>
        <span class="page-link__arrow page-link__arrow--<?= $arrowRotation ?> icon arrow-icon"></span>
    </button>
<?php endif ?>