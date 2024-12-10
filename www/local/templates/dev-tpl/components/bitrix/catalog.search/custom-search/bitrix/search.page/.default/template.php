<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}
/** @global CMain $APPLICATION */
/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponent $component */
?>
<div class="search-page">
    <div class="container">
        <form class="search-form">
            <input class="input" hx-get="/catalog/" hx-target="#search-result" hx-select="#search-result"
                hx-trigger="input changed delay:500ms, search" hx-swap="outerHTML" type="search" name="q"
                placeholder="Поиск" value="<?= $arResult["REQUEST"]["QUERY"] ?>">
            <button class="search-btn">
                <span class="icon search-icon"></span>
            </button>
        </form>
    </div>
</div>