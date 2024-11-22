<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $title
 * @var string $date
 * @var string $link
 * @var array|null $img
 */
?>

<div class="post-block">
    <?php if ($img): ?>
        <picture class="bg">
            <img src="<?= $this->e($img['SRC']) ?>" alt="" class="bg__img">
        </picture>
    <?php endif ?>
    <p class="p2 date"><?= $this->e($date) ?></p>
    <p class="title button">
        <a href="<?= $this->e($link) ?>" class="link-cover"><?= $this->e($title) ?></a>
    </p>
</div>