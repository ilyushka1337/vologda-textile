<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $detailUrl
 * @var string|null $previewUrl
 * @var string $caption
 * @var string|null $aspectRatio
 * @var string|null $fancyboxName
 */

$aspectRatio = $aspectRatio ?? 'auto';
$previewUrl = $previewUrl ?? $detailUrl;
?>

<div class="content-gallery-item">
    <a data-fancybox='<?= $fancyboxName ?? 'gallery' ?>' href="<?= $detailUrl ?>"
        class="content-gallery-item__wrap content-gallery-item__wrap--aspect-ratio-<?= $aspectRatio ?>">
        <img alt="<?= $caption ?>" src="<?= $previewUrl ?>" loading="lazy" class="content-gallery-item__img">
        <span class="content-gallery-item__overlay">
            <div class="content-gallery-item__zoom">
                <span class="icon zoom-icon"></span>
            </div>
        </span>
    </a>
    <?php if ($caption): ?>
        <p class="content-gallery-item__caption"><?= $this->e($caption) ?></p>
    <?php endif ?>
</div>