<?php
use Placestart\Core\Utils;
?>
<section class="about-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container" x-data="{activeTab: 0}">
        <div class="top">
            <?php if ($arParams['TITLE']): ?>
                <h2 class="h1 title">
                    <?= Utils::wrapGroup('<span class="red-text">$1<span>', $arParams['TITLE']) ?>
                </h2>
            <?php endif ?>
            <div class="title-column">
            </div>
        </div>
        <div class="wrap">
            <?php foreach ($arResult['ELEMENTS'] as $i => $elem): ?>
                <div class="tab">
                    <template x-if="activeTab == <?= $i ?>">
                        <div class="grid">
                            <div class="text-column">
                                <? $APPLICATION->IncludeComponent(
                                    "sprint.editor:blocks",
                                    "custom",
                                    [
                                        "ELEMENT_ID" => $elem['ID'],
                                        "IBLOCK_ID" => \Placestart\Core\Utils::locateIblock('textpages'),
                                        "PROPERTY_CODE" => 'CONTENT',
                                    ]
                                ); ?>
                            </div>
                            <?php if ($elem['PICTURE']): ?>
                                <div class="img-column">
                                    <img src="<?= $elem['PICTURE']['SRC'] ?>" alt="" class="img">
                                </div>
                            <?php endif ?>
                        </div>
                    </template>
                    <template x-if="activeTab != <?= $i ?>">
                        <button class="link-block h2" @click="activeTab = <?= $i ?>">
                            <span class="text"><?= $elem['NAME'] ?></span>
                            <span class="icon arrow-icon"></span>
                        </button>
                    </template>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</section>