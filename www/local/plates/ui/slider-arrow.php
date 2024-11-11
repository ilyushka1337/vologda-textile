<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $style
 * @var string $attrs
 * @var bool $isPrev
 */
?>

<button class="slider-arrow <?= $isPrev ? 'slider-arrow--prev' : '' ?> <?= $style ?>" <?= $attrs ?>>
    <span class="icon arrow-right-icon"></span>
</button>