<?php if (count($arResult['NEWS']) > 0): ?>
    <section class="news-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container top">
            <div class="label-column">
                <div class="label label--gray">новости</div>
            </div>
            <div class="text-column">
                <h2 class="h1">Последние новости и важная<br> информация <span class="red-text">в одном месте</span></h2>
            </div>
            <div class="link-column">
                <?= tpl('ui/page-link', [
                    'type' => 'link',
                    'link' => '/news/',
                    'text' => 'Смотреть все'
                ]) ?>
            </div>
        </div>
        <div class="container container-fluid">
            <div class="news-grid">
                <?php
                foreach ($arResult['NEWS'] as $arPost) {
                    echo tpl('components/post-block', [
                        'title' => $arPost['TITLE'],
                        'img' => $arPost['IMG'],
                        'date' => $arPost['ACTIVE_FROM'],
                        'link' => $arPost['LINK']
                    ]);
                }
                ?>
            </div>
        </div>
    </section>
<?php endif ?>