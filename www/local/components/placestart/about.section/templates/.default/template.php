<section class="about-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <div class="top">
            <div class="label-column">
                <div class="label label--gray">о нас</div>
            </div>
            <div class="title-column">
                <h2 class="h1 title">Всё что вы хотели знать <span class="red-text">про нас</span></h2>
            </div>
        </div>
        <div class="text-column">
            <div class="content-text">
                <h2>О комбинате</h2>
                <p>Вологодский Текстильный Комбинат — это уникальный производственный комплекс с мощной инфраструктурой,
                    развитой технической, организационной и научной базой.</p>
                <p>Собственная лаборатория, 4 этапа контроля качества, автоматизированная система управления
                    производством
                    и высококвалифицированный персонал — все это делает Вологодский Текстильный Комбинат одним
                    из передовых
                    предприятий российской лёгкой промышленности, включающий в себя полный цикл производства от крашения
                    пряжи до выпуска готовых изделий.</p>
            </div>
            <?= tpl('ui/page-link', [
                'type' => 'link',
                'text' => 'Подробнее',
                'link' => '/o-kompanii/o-kombinate/'
            ]); ?>
        </div>
        <div class="img-column">
            <img src="/local/assets/about-img.jpg" alt="" class="img">
            <a class="link-block h2" href="/o-kompanii/o-brende/">
                <span class="text">Производство</span>
                <span class="icon arrow-icon"></span>
            </a>
            <a class="link-block h2" href="/partnership/">
                <span class="text">Партнёрам</span>
                <span class="icon arrow-icon"></span>
            </a>
        </div>
    </div>
</section>