<?php if (count($arResult['SECTIONS']) > 0): ?>
    <section class="textile-catalog <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container">
            <div class="label-column">
                <div class="label label--gray">ткани</div>
            </div>
            <div class="text-column">
                <h2 class="title h1">Каталог</h2>
                <div class="grid">
                    <?php foreach ($arResult['SECTIONS'] as $section): ?>
                        <div x-data="{isModalOpen: false}">
                            <div class="textile-block">
                                <?php if ($section['PICTURE']): ?>
                                    <img src="<?= $section['PICTURE']['SRC'] ?>" alt="" class="img">
                                <?php endif ?>
                                <p class="name button"><?= $section['NAME'] ?></p>
                                <?php if ($section['DESCRIPTION']): ?>
                                    <div class="description content-text">
                                        <?= $section['DESCRIPTION'] ?>
                                    </div>
                                <?php endif ?>
                                <?php if (count($section['ELEMENTS']) > 0): ?>
                                    <div @click="isModalOpen = true">
                                        <?= tpl('ui/page-link', [
                                            'type' => 'button',
                                            'text' => 'Палитра цветов'
                                        ]) ?>
                                    </div>
                                <?php endif ?>
                            </div>
                            <?php if (count($section['ELEMENTS']) > 0): ?>
                                <template x-teleport="body">
                                    <div class="modal" x-data="Modal" x-bind="root" x-model="isModalOpen" x-cloak>
                                        <div class="modal__overlay" x-bind="overlay">
                                            <div class="modal__container modal__container--xl modal__container--center">
                                                <button class="modal__close" x-bind="hide">
                                                    <span class="icon cross-icon"></span>
                                                </button>
                                                <div class="modal__header">
                                                    <p class="modal__title h1"><?= $section['NAME'] ?></p>
                                                </div>
                                                <div class="modal__body">
                                                    <div class="textile-grid">
                                                        <?php foreach ($section['ELEMENTS'] as $element): ?>
                                                            <div class="textile-sample">
                                                                <?php if ($element['PICTURE']): ?>
                                                                    <img src="<?= $element['PICTURE']['SRC'] ?>" alt="" class="img">
                                                                <?php endif ?>
                                                                <div class="info">
                                                                    <?= $element['NAME'] ?>
                                                                </div>
                                                            </div>
                                                        <?php endforeach ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            <?php endif ?>
                        </div>
                    <?php endforeach ?>
                </div>
            </div>
        </div>
    </section>
<?php endif ?>