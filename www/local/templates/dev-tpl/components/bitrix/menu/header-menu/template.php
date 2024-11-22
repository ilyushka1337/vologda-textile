<nav class="menu">
    <?php foreach ($arResult as $item): ?>
        <?php if ($item['IS_PARENT']): ?>
            <div class="item parent">
                <a href="<?= $item['LINK'] ?>" class="link p2">
                    <?= $item['TEXT'] ?>
                    <span class="icon triangle-down-icon"></span>
                </a>
                <div class="submenu">
                    <?php foreach ($item['CHILD'] as $child): ?>
                        <a href="<?= $child['LINK'] ?>" class="link p2"><?= $child['TEXT'] ?></a>
                    <?php endforeach ?>
                </div>
            </div>
        <?php else: ?>
            <a href="<?= $item['LINK'] ?>" class="item link p2"><?= $item['TEXT'] ?></a>
        <?php endif ?>
    <?php endforeach ?>
</nav>