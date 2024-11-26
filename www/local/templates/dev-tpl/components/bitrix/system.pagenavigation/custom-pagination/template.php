<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();
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

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");
?>

<nav class="pagination">
    <? if ($arResult["NavPageNomer"] > 1): ?>
        <? if ($arResult["bSavePage"]): ?>
            <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                class="prev">
                <span class="icon chevron-right-icon"></span>
            </a>
        <? else: ?>
            <? if ($arResult["NavPageNomer"] > 2): ?>
                <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                    class="prev">
                    <span class="icon chevron-right-icon"></span>
                </a>
            <? else: ?>
                <a href="<?= $arResult["sUrlPath"] ?>" class="prev">
                    <span class="icon chevron-right-icon"></span>
                </a>
            <? endif ?>
        <? endif ?>
    <? else: ?>
        <span class="prev inactive">
            <span class="icon chevron-right-icon"></span>
        </span>
    <? endif ?>

    <div class="pages">
        <?
        while ($arResult["nStartPage"] <= $arResult["nEndPage"]):
            $is_current = $arResult["nStartPage"] == $arResult["NavPageNomer"];
            ?>
            <? if ($is_current): ?>
                <span class="page-num current"><?= $arResult["nStartPage"] ?></span>
            <? elseif ($arResult["nStartPage"] == 1 && $arResult["bSavePage"] == false): ?>
                <a class="page-num"
                    href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"><?= $arResult["nStartPage"] ?></a>
            <? else: ?>
                <a class="page-num"
                    href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"><?= $arResult["nStartPage"] ?></a>
            <? endif ?>
            <?
            $arResult["nStartPage"]++;
        endwhile;
        ?>
        <?php if ($arResult['nEndPage'] + 1 < $arResult['NavPageCount']): ?>
            <span class="page-dots">...</span>
            <a class="page-num last"
                href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>">
                <?= $arResult["NavPageCount"] ?>
            </a>
        <?php endif ?>
    </div>

    <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
        <a class="next"
            href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>">
            <span class="icon chevron-right-icon"></span>
        </a>
    <? else: ?>
        <span class="next inactive">
            <span class="icon chevron-right-icon"></span>
        </span>
    <? endif ?>
</nav>