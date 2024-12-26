<?php
/**
 * @var $block array
 * @var $this  SprintEditorBlocksComponent
 */

switch ($block['perRow']) {
    case 1:
        $width = 1260;
        break;

    case 2:
        $width = 615;
        break;

    case 3:
        $width = 400;
        break;

    case 4:
        $width = 292;
        break;
}

switch ($block['aspectRatio']) {
    case '3-to-2':
        $height = $width * 0.66;
        break;

    case '4-to-3':
        $height = $width * 0.75;
        break;

    case '3-to-4':
        $height = $width * 1.33;
        break;

    case 'square':
        $height = $width;
        break;
}

$images = Sprint\Editor\Blocks\Gallery::getImages(
    $block,
    [
        'width' => ceil($width),
        'height' => ceil($height),
        'exact' => 1,
    ],
    [
        'width' => 2000,
        'height' => 2000,
        'exact' => 0,
    ]
);
?>

<?php if (!empty($images)): ?>
    <div class="container container-sm content-block">
        <div class="content-gallery content-gallery--cols-<?= $block['perRow'] ?>" x-data="FancyboxGallery">
            <?php foreach ($images as $image): ?>
                <?= tpl('ui/gallery-item', [
                    'detailUrl' => $image['DETAIL_SRC'],
                    'previewUrl' => $image['SRC'],
                    'caption' => $image['DESCRIPTION'],
                    'aspectRatio' => $block['aspectRatio']
                ]) ?>
            <?php endforeach ?>
        </div>
    </div>
<?php endif ?>