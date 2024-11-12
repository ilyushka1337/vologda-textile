<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $link
 * @var string $text
 */
?>

<a href="<?= $this->e($link) ?>" class="page-link link">
    <?= $this->e($text) ?>
    <svg class="page-link__arrow" width="14" height="15" viewBox="0 0 14 15" fill="none"
        xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M10.2929 2.64642H0.707107V0.646423H13.7071V13.6464H11.7071V4.06064L1.41421 14.3535L0 12.9393L10.2929 2.64642Z" />
    </svg>
</a>