<section class="main-directions <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="fullhd-container">
        <img src="/local/assets/decor.svg" alt="" class="decor">
        <div class="container container-fluid">
            <div class="label-column">
                <?= tpl('ui/label', [
                    'style' => 'label--gray',
                    'text' => 'основные направления'
                ]) ?>
            </div>
            <div class="content-column">
                <h2 class="title h1">
                    Вологодский текстильный комбинат ведущий российский производитель
                    <?= tpl('ui/page-link', [
                        'text' => 'Хочу сотрудничать',
                        'link' => '/',
                        'type' => 'link'
                    ]) ?>
                </h2>
                <div class="grid">
                    <div class="direction-block">
                        <p class="name">
                            <a href="/votex/" class="link-cover h2">Votex</a>
                        </p>
                        <img src="/local/assets/votex.png" alt="" class="img">
                        <p class="text p1">Собственный бренд готовых текстильных изделий </p>
                    </div>
                    <div class="direction-block">
                        <p class="name">
                            <a href="/fabrics/" class="link-cover h2">Ткани</a>
                        </p>
                        <img src="/local/assets/fabrics.png" alt="" class="img">
                        <p class="text p1">Разработка тканей под задачи бизнеса и для оптовых покупателей</p>
                    </div>
                    <div class="direction-block">
                        <p class="name">
                            <a href="/production/" class="link-cover h2">Изготовление</a>
                        </p>
                        <img src="/local/assets/production.png" alt="" class="img">
                        <p class="text p1">Корпоративные подарки и аксессуары</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>