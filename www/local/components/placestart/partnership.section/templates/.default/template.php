<section class="partnership-section <?= $arParams['IS_PAGE_BLOCK'] == 'Y' ? 'page-block' : '' ?>">
    <div class="container">
        <h1 class="h1">Сотрудничество</h1>
        <div class="content-text">
            <p>Вологодский текстильный комбинат предлагает уникальные возможности для сотрудничества с ведущими
                торговыми компаниями и оптовыми покупателями в сегментах собственной торговой марки
                и гостинично-ресторанного бизнеса (HoReCa).</p>
        </div>
        <div>
            <div class="content-text">
                <p>Готовы сотрудничать с швейными фабриками/цехами по пошиву изделий из тканей собственного
                    производства.
                </p>
                <p>Если вы хотите сотрудничать с нами, просим направить письмо на электронную почту <a
                        href="mailto:office@vtktextile.ru">office@vtktextile.ru</a>
                    или оставить заявку на сайте</p>
                <p><?= tpl('ui/page-link', [
                    'link' => '#feedback-form',
                    'text' => 'Оставить заявку'
                ]) ?></p>
            </div>
        </div>
    </div>
</section>