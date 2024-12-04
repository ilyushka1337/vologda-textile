<?php
/** @var $block array */

$image = Sprint\Editor\Blocks\Image::getImage(
	$block['image'],
	[
		'width' => 550,
		'height' => 550,
		'exact' => 0,
	]
);
?>

<div class="container container-sm content-block">
	<div class="content-text-block">
		<?= tpl('ui/text-block', [
			'text' => $block['text']['value'],
			'imgSrc' => $image['SRC'],
			'imgPosition' => $block['imagePosition']
		]) ?>
	</div>
</div>