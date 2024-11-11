<?php
$helper = new Placestart\Core\ComponentHelper($component);
?>

<?php
$helper->deferredCall('Placestart\Core\Utils::IncludeComponent', [
    'bitrix:breadcrumb',
    [
        "PATH" => "",
        "SITE_ID" => "s1",
        "START_FROM" => "0"
    ],
    'breadcrumbs'
]);
?>

<?php $helper->saveCache(); ?>