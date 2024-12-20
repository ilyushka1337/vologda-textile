<?php

use Sprint\Options\Builder\Builder;
use Sprint\Options\Custom\StringOption;

return (new Builder)
    ->setTitle('Настройки контента')
    ->setSort(60)
    ->addPage('Общие настройки')
    ->addTab('Контакты')
    ->addCustomOption(
        (new StringOption('SITE_PRODUCTION_ADDRESS'))
            ->setTitle('Адрес производства')
    )
    ->addCustomOption(
        (new StringOption('SITE_STORE_ADDRESS'))
            ->setTitle('Адрес магазина')
    )
    ->addCustomOption(
        (new StringOption('SITE_WORK_HOURS'))
            ->setTitle('Режим работы')
    )
    ->addCustomOption(
        (new StringOption('SITE_EMAIL'))
            ->setTitle('Email')
    )
    ->addCustomOption(
        (new StringOption('SITE_PHONE'))
            ->setTitle('Телефон')
    )
    ->addCustomOption(
        (new StringOption('SITE_VK'))
            ->setTitle('ВКонтакте')
    )
    ->addCustomOption(
        (new StringOption('SITE_TELEGRAM'))
            ->setTitle('Телеграмм')
    )
    ->addCustomOption(
        (new StringOption('SITE_OK'))
            ->setTitle('Одноклассники')
    )
    ->addCustomOption(
        (new StringOption('SITE_YOUTUBE'))
            ->setTitle('YouTube')
    )
    ->addCustomOption(
        (new StringOption('SITE_WILDBERRIES'))
            ->setTitle('Wildberries')
    )
    ->addCustomOption(
        (new StringOption('SITE_OZON'))
            ->setTitle('Ozon')
    );
