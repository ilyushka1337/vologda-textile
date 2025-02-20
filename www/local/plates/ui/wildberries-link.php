<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $link
 * @var string|null $text
 */
?>

<a href="<?= $this->e($link) ?>" target="_blank" class="marketplace-link">
    <svg class="marketplace-link__logo" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M0 38.2403C0 59.3912 17.1422 76.4807 38.2931 76.4807C59.444 76.4807 76.5334 59.3385 76.5334 38.2403C76.5334 17.1422 59.3912 0 38.2931 0C17.1422 0 0 17.1422 0 38.2403Z"
            fill="url(#paint0_linear_2050_803)" />
        <path fill-rule="evenodd" clip-rule="evenodd"
            d="M23.6293 50.2149H19.0932L12.3418 26.3213H16.4559L21.4667 44.9931L26.8995 26.3213H30.5389L35.9189 44.9931L40.9297 26.3213H45.0439L38.3452 50.2149H33.8091L28.7456 32.7562L23.6293 50.2149ZM60.8675 37.8198C62.9773 38.9274 64.1904 40.879 64.1904 43.4108C64.1904 45.3623 63.5047 46.9974 62.0806 48.3161C60.6565 49.6347 59.0214 50.2677 56.9643 50.2677H46.7845V26.3213H56.2786C58.2302 26.3213 59.9181 26.9542 61.2367 28.2201C62.6081 29.486 63.2938 31.0684 63.2938 32.9145C63.2938 35.0243 62.4498 36.6066 60.8675 37.8198ZM56.2786 30.0135H50.6876V36.2902H56.2786C58.0192 36.2902 59.3379 34.9188 59.3379 33.1254C59.3379 31.3848 58.0192 30.0135 56.2786 30.0135ZM50.6876 46.5227H57.0171C58.8104 46.5227 60.2873 45.0459 60.2873 43.1998C60.2873 41.301 58.8632 39.8768 57.0171 39.8768H50.6876V46.5227Z"
            fill="white" />
        <defs>
            <linearGradient id="paint0_linear_2050_803" x1="18.8007" y1="57.5472" x2="58.1508" y2="18.57"
                gradientUnits="userSpaceOnUse">
                <stop stop-color="#A92284" />
                <stop offset="1" stop-color="#53237D" />
            </linearGradient>
        </defs>
    </svg>

    <?php if ($text): ?>
        <span class="marketplace-link__text button"><?= $this->e($text) ?></span>
    <?php endif ?>
</a>