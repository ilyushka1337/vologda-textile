<?php /**
  * @var $block array
  * @var $this  SprintEditorBlocksComponent
  */

use Bitrix\Main\Loader;
use Placestart\Core\Utils;
?>
<?php if (!empty($block['files'])): ?>
    <div class="content-files content-block">
        <?php
        foreach ($block['files'] as $item):
            $info = Utils::getFileInfo($item['file']['CONTENT_TYPE'], $item['file']['FILE_SIZE']);
            ?>
            <div class="content-file-row">
                <span class="file-icon icon"></span>
                <p class="meta">
                    <?= $info['mime'] ?>
                    <?= $info['size'] ?>
                </p>
                <a href="<?= $item['file']['SRC'] ?>" download="<?= $item['file']['ORIGINAL_NAME'] ?>" class="name link-cover">
                    <?= $item['desc'] ? $item['desc'] : $item['file']['ORIGINAL_NAME'] ?>
                </a>
            </div>
        <?php endforeach ?>
    </div>
<?php endif ?>