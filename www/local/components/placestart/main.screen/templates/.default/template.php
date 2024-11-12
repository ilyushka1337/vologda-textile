<section class="main-screen page-block">
    <div class="container">
        <div class="swiper" x-data="MainSlider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="/local/assets/slide-1.jpg" alt="" class="bg">
                    <div class="text-column">
                        <h2 class="title">Приветствуем вас на странице Вологодского Текстильного Комбината!</h2>
                        <div class="content-text">
                            <p>Мы являемся предприятием полного цикла: от изготовления ткани на современных ткацких
                                станках до продажи готовой продукции по всей территории Российской Федерации и за её
                                пределами</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/local/assets/slide-1.jpg" alt="" class="bg">
                    <div class="text-column">
                        <h2 class="title">Приветствуем вас на странице Вологодского Текстильного Комбината!</h2>
                        <div class="content-text">
                            <p>Мы являемся предприятием полного цикла: от изготовления ткани на современных ткацких
                                станках до продажи готовой продукции по всей территории Российской Федерации и за её
                                пределами</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/local/assets/slide-1.jpg" alt="" class="bg">
                    <div class="text-column">
                        <h2 class="title">Приветствуем вас на странице Вологодского Текстильного Комбината!</h2>
                        <div class="content-text">
                            <p>Мы являемся предприятием полного цикла: от изготовления ткани на современных ткацких
                                станках до продажи готовой продукции по всей территории Российской Федерации и за её
                                пределами</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <img src="/local/assets/slide-1.jpg" alt="" class="bg">
                    <div class="text-column">
                        <h2 class="title">Приветствуем вас на странице Вологодского Текстильного Комбината!</h2>
                        <div class="content-text">
                            <p>Мы являемся предприятием полного цикла: от изготовления ткани на современных ткацких
                                станках до продажи готовой продукции по всей территории Российской Федерации и за её
                                пределами</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="slider-controls">
                <div class="slider-pagination" x-ref="pagination"></div>
                <?= tpl('ui/slider-arrow', [
                    'direction' => 'prev'
                ]) ?>
                <?= tpl('ui/slider-arrow', [
                    'direction' => 'next'
                ]) ?>
            </div>
        </div>
    </div>
</section>