<nav class="menu">
    <?php foreach ($arResult as $item): ?>
        <?php if ($item['IS_PARENT']): ?>
            <div class="item parent">
                <a href="<?= $item['LINK'] ?>" class="link p1">
                    <?= $item['TEXT'] ?>
                    <span class="icon chevron-down-icon"></span>
                </a>
                <div class="submenu">
                    <div class="container">
                        <div class="grid">
                            <?php foreach ($item['CHILD'] as $child): ?>
                                <a href="<?= $child['LINK'] ?>" class="link h3"><?= $child['TEXT'] ?></a>
                            <?php endforeach ?>
                        </div>
                    </div>
                </div>
            </div>
        <?php else: ?>
            <a href="<?= $item['LINK'] ?>" class="item link p1"><?= $item['TEXT'] ?></a>
        <?php endif ?>
    <?php endforeach ?>
</nav>