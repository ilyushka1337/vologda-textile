<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $lang
 */
?>

<div class="lang-switch p2">
    <a href="/" class="lang <?= $lang == 'RU' ? 'active' : '' ?>">RU</a>
    <div class="line"></div>
    <a href="/" class="lang <?= $lang == 'EN' ? 'active' : '' ?>">EN</a>
</div>