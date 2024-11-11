<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $title
 * @var string $text
 * @var array|null $img
 */
?>

<div class="container">
    <div class="grid">
        <?php if ($img): ?>
            <div class="img-column">
                <img loading="lazy" src="<?= $img['SRC'] ?>" alt="" class="img">
            </div>
        <?php endif ?>
        <div class="text-column">
            <div class="content-text">
                <?= $text ?>
            </div>
        </div>
    </div>
</div>