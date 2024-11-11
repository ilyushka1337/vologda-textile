<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $detailUrl
 * @var string $previewUrl
 * @var string $caption
 * @var string|null $fancyboxName
 */
?>

<div class="content-gallery-item">
    <a data-fancybox='<?= $fancyboxName ?? 'gallery' ?>' href="<?= $detailUrl ?>" class="content-gallery-item__wrap">
        <img alt="<?= $caption ?>" src="<?= $previewUrl ?>" class="content-gallery-item__img">
        <span class="content-gallery-item__overlay">
            <div class="content-gallery-item__zoom">
                <span class="icon zoom-icon"></span>
            </div>
        </span>
    </a>
    <?php if ($caption): ?>
        <p class="content-gallery-item__caption"><?= $caption ?></p>
    <?php endif ?>
</div>