<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $lang
 */
?>

<div class="lang-switch p2" x-data="LangSwitch">
    <button @click="setLang('ru')" :class="lang == 'ru' && 'active'" class="lang">RU</button>
    <div class="line"></div>
    <button @click="setLang('en')" :class="lang == 'en' && 'active'" class="lang">EN</button>
</div>