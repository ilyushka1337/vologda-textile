<section class="history-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container container-sm">
        <h2 class="block-title h1">История предприятия</h2>
    </div>
    <div class="slider-wrap" x-data="HistorySlider">
        <div class="container container-sm">
            <div class="swiper" x-ref="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <p class="year h2">1936</p>
                        <div class="dot"></div>
                        <div class="content-text">
                            <p>Основание Вологодского комбината, крупнейшего льняного производства в СССР. В марте на
                                строительстве работало 400 человек, а в декабре уже 1000 человек.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p class="year h2">1937</p>
                        <div class="dot"></div>
                        <div class="content-text">
                            <p>За успешное выполнение плана строительства широко развернулось стахановское движение.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p class="year h2">1940</p>
                        <div class="dot"></div>
                        <div class="content-text">
                            <p>Число стахановцев возросло до 450 человек.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p class="year h2">1942</p>
                        <div class="dot"></div>
                        <div class="content-text">
                            <p>В годы войны текстильщики готовили кадры для монтажа и пуска технологического
                                оборудования, заготовляли лес, торф. В апреле выработали первые горсти чесаного льна. За
                                проявленные храбрость и отвагу и самоотверженный труд 386 работников комбината удостоены
                                правительственных наград.</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <p class="year h2">1945</p>
                        <div class="dot"></div>
                        <div class="content-text">
                            <p>4 ноября Приказом НКТП СССР строительство льнокомбината выведено из консервации.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-dot-pagination" x-ref="pagination"></div>
    </div>
    <div class="gallery">
        <div class="container container-fluid">
            <div class="content-gallery content-gallery--cols-3">
                <div class="content-gallery-item" x-data="FancyboxGallery">
                    <a data-fancybox="gallery" href="/local/assets/history-1.jpg" class="content-gallery-item__wrap">
                        <img loading="lazy" src="/local/assets/history-1.jpg" class="content-gallery-item__img">
                        <span class="content-gallery-item__overlay">
                            <div class="content-gallery-item__zoom icon zoom-icon"></div>
                        </span>
                    </a>
                </div>
                <div class="content-gallery-item" x-data="FancyboxGallery">
                    <a data-fancybox="gallery" href="/local/assets/history-2.jpg" class="content-gallery-item__wrap">
                        <img loading="lazy" src="/local/assets/history-2.jpg" class="content-gallery-item__img">
                        <span class="content-gallery-item__overlay">
                            <div class="content-gallery-item__zoom icon zoom-icon"></div>
                        </span>
                    </a>
                </div>
                <div class="content-gallery-item" x-data="FancyboxGallery">
                    <a data-fancybox="gallery" href="/local/assets/history-3.jpg" class="content-gallery-item__wrap">
                        <img loading="lazy" src="/local/assets/history-3.jpg" class="content-gallery-item__img">
                        <span class="content-gallery-item__overlay">
                            <div class="content-gallery-item__zoom icon zoom-icon"></div>
                        </span>
                    </a>
                </div>
                <div class="content-gallery-item" x-data="FancyboxGallery">
                    <a data-fancybox="gallery" href="/local/assets/history-4.jpg" class="content-gallery-item__wrap">
                        <img loading="lazy" src="/local/assets/history-4.jpg" class="content-gallery-item__img">
                        <span class="content-gallery-item__overlay">
                            <div class="content-gallery-item__zoom icon zoom-icon"></div>
                        </span>
                    </a>
                </div>
                <div class="content-gallery-item" x-data="FancyboxGallery">
                    <a data-fancybox="gallery" href="/local/assets/history-5.jpg" class="content-gallery-item__wrap">
                        <img loading="lazy" src="/local/assets/history-5.jpg" class="content-gallery-item__img">
                        <span class="content-gallery-item__overlay">
                            <div class="content-gallery-item__zoom icon zoom-icon"></div>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>