<section class="about-brand <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <div class="text-grid">
            <div class="logo-column">
                <div class="logo">
                    <span class="votex-icon"></span>
                    <p class="text p1">Наш бренд</p>
                </div>
            </div>
            <div class="text-column">
                <div class="column">
                    <div class="content-text">
                        <p>В свете динамичного роста рынка домашнего текстиля в России было принято решение о выходе
                            Вологодского текстильного комбината в B2C сегмент под брендом VOTEX.</p>
                    </div>
                </div>
                <div class="column">
                    <div class="content-text">
                        <p>Продукция Комбината представлена на основных электронных площадках, это обеспечивает нам быструю обратную связь с конечным пользователем, которая поддерживает продажи в эпоху цифровой трансформации.</p>
                    </div>
                    <?= tpl('ui/page-link', [
                        'text' => 'В каталог',
                        'link' => '/catalog/'
                    ]) ?>
                </div>
                <div class="column">
                    <div class="content-text">
                        <p>В бренд входит четыре направления продукции:</p>
                    </div>
                    <div class="section-logo-row">
                        <img class="img" src="/local/assets/logo-home-dark.png" alt="">
                        <p class="hyphen p1">—</p>
                        <p class="p1">
                            текстильные решения и декор для дома
                        </p>
                    </div>
                    <div class="section-logo-row">
                        <img class="img" src="/local/assets/logo-spa-dark.png" alt="">
                        <p class="hyphen p1">—</p>
                        <p class="p1">
                            текстиль для ванной, банных и спа-процедур
                        </p>
                    </div>
                    <div class="section-logo-row">
                        <img class="img" src="/local/assets/logo-kids-dark.png" alt="">
                        <p class="hyphen p1">—</p>
                        <p class="p1">
                            текстиль для детей
                        </p>
                    </div>
                    <div class="section-logo-row">
                        <img class="img" src="/local/assets/logo-premium-dark.png" alt="">
                        <p class="hyphen p1">—</p>
                        <p class="p1">
                            дизайнерские текстильные коллекции
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <?php /* ?>
<div class="video" x-data="Video">
  <video class="video__media" preload="meta" x-bind="video">
      <source src="/upload/Ролик ВТК.mp4" type="video/mp4" />
  </video>
  <button class="video__play-btn play-btn play-btn--red" x-bind="playBtn">
      <svg class="play-btn__icon" viewBox="0 0 90 90" fill="none" xmlns="http://www.w3.org/2000/svg">
          <circle cx="45.0018" cy="44.9009" r="44.3299" fill="white" class="play-btn__circle" />
          <path d="M56.5937 45.5829L41.2488 56.2142L41.2488 34.9516L56.5937 45.5829Z"
              class="play-btn__triangle" />
      </svg>
  </button>
</div>
<?php */ ?>
    </div>
</section>