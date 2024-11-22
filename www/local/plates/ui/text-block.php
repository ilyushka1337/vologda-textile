<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $title
 * @var string $text
 * @var string $imgPosition
 * @var array|null $img
 */
?>


<div class="text-block text-block--<?= $this->e($imgPosition) ?>-img">
    <?php if ($img): ?>
        <div class="text-block__img-column">
            <img loading="lazy" src="<?= $img['SRC'] ?>" alt="" class="text-block__img">
        </div>
    <?php endif ?>
    <div class="text-block__text-column">
        <div class="text-block__text content-text">
            <?= $text ?>
        </div>
    </div>
</div>