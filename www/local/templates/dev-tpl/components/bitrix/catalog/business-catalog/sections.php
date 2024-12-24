<?php

use Bitrix\Main\Context;

/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

$this->setFrameMode(true);
?>

<div class="catalog-page">
    <div class="container section-decription">
        <h1 class="h1"><?php $APPLICATION->ShowTitle(false) ?></h1>
    </div>

    <div class="container container-fluid">
        <div class="section-blocks-grid">
            <?= tpl('components/section-block', [
                'imgSrc' => '/local/assets/section-img-home.jpg',
                'overlayLogoSrc' => '/local/assets/logo-home.png',
                'link' => '/catalog/home/'
            ]) ?>

            <?= tpl('components/section-block', [
                'imgSrc' => '/local/assets/section-img-spa.jpg',
                'overlayLogoSrc' => '/local/assets/logo-spa.png',
                'link' => '/catalog/spa/'
            ]) ?>

            <?= tpl('components/section-block', [
                'imgSrc' => '/local/assets/section-img-kids.jpg',
                'overlayLogoSrc' => '/local/assets/logo-kids.png',
                'link' => '/catalog/kids/'
            ]) ?>

            <?= tpl('components/section-block', [
                'imgSrc' => '/local/assets/section-img-premium.jpg',
                'overlayLogoSrc' => '/local/assets/logo-premium.png',
                'link' => '/catalog/premium/'
            ]) ?>
        </div>
    </div>
</div>