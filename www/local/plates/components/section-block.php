<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string|null $logoSrc
 * @var string $imgSrc
 * @var string $overlayLogoSrc
 * @var string $link
 */
?>

<div class="section-block">
    <?php if ($logoSrc): ?>
        <img src="<?= $this->e($logoSrc) ?>" loading="lazy" class="section-block__logo">
    <?php endif ?>
    <img src="<?= $this->e($imgSrc) ?>" loading="lazy" class="section-block__img">
    <a href="<?= $this->e($link) ?>" class="section-block__overlay">
        <img src="<?= $this->e($overlayLogoSrc) ?>" loading="lazy" class="section-block__overlay-logo">
    </a>
</div>