<?php
use Placestart\Core\Utils;
?>

<?php if ($arResult['ELEMENTS'] && count($arResult['ELEMENTS']) > 0): ?>
    <section class="partnership-advantages <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container">
            <?php if ($arParams['TITLE']): ?>
                <h2 class="block-title h2">
                    <?= Utils::wrapGroup('<span class="red-text">$1<span>', $arParams['TITLE']) ?>
                </h2>
            <?php endif ?>

            <div class="grid">
                <?php foreach ($arResult['ELEMENTS'] as $elem): ?>
                    <div class="advantage">
                        <?php if ($elem['PICTURE']): ?>
                            <img src="<?= $elem['PICTURE']['SRC'] ?>" alt="" class="advantage-icon">
                        <?php endif ?>
                        <div class="text content-text">
                            <?= $elem['TEXT'] ?>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </section>
<?php endif ?>