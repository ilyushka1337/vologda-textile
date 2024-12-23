<?php
/**
 * @var League\Plates\Template\Template $this
 * @var string $title
 * @var string $text
 * @var string|null $payment
 * @var string|null $HHlink
 */
?>
<div class="vacancy-block">
    <p class="title h2"><?= $this->e($title) ?></p>
    <?php if ($payment): ?>
        <div class="payment">
            <p class="p2">Заработная плата</p>
            <p class="button"><?= $this->e($payment) ?></p>
        </div>
    <?php endif ?>
    <div class="content-text text">
        <?= $this->e($text) ?>
    </div>
    <?php if ($HHlink): ?>
        <?= tpl('ui/page-link', [
            'target' => '_blank',
            'text' => 'Подробнее hh.ru',
            'link' => $HHlink
        ]) ?>
    <?php endif ?>
</div>