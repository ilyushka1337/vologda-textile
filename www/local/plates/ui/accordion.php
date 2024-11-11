<div class="accordion" x-data="Accordion" x-bind="root">
    <div class="accordion__head" x-bind="toggle">
        <h3 class="accordion__name"><?= $name ?></h3>
        <span class="accordion__icon icon chevron-down-icon" :class="open && 'open'"></span>
    </div>
    <div class="collapse" x-bind="collapse">
        <div class="accordion__content">
            <div class="content-text">
                <?= $content ?>
            </div>
        </div>
    </div>
</div>