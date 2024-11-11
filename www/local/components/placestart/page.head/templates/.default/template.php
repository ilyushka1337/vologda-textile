<?php
$helper = new Placestart\Core\ComponentHelper($component);
?>

<section class="page-head">
    <div class="container">
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
    </div>
</section>

<?php $helper->saveCache(); ?>