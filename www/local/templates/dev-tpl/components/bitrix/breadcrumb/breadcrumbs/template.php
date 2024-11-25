<?php
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

//delayed function must return a string
if (empty($arResult))
    return "";

$breadcrumbs = '<nav id="breadcrumbs" class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList"><ul>';

foreach ($arResult as $i => $item) {
    $link = $item['LINK'];
    $title = $item['TITLE'];

    $breadcrumbs .= <<<EOD
    <li itemscope itemprop="itemListElement">
        <span itemprop="name">
            <a class="link" href="$link">
                $title
            </a>
        </span>
    </li>
    EOD;
}

$breadcrumbs .= '</ul></nav>';

return $breadcrumbs;

