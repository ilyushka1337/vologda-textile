<?php if (count($arResult['VACANCIES']) > 0): ?>
    <section class="vacancies-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
        <div class="container">
            <h1 class="h1 block-title">Вакансии</h1>
            <div class="vacancies-grid">
                <?php
                foreach ($arResult['VACANCIES'] as $arPost) {
                    echo tpl('components/vacancy-block', [
                        'title' => $arPost['TITLE'],
                        'text' => $arPost['TEXT'],
                        'payment' => $arPost['PAYMENT'],
                        'HHlink' => $arPost['HH_LINK']
                    ]);
                }
                ?>
            </div>
        </div>
    </section>
<?php endif ?>