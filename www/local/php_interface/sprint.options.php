<?php

use Sprint\Options\Builder\Builder;
use Sprint\Options\Custom\CheckboxOption;
use Sprint\Options\Custom\FileOption;
use Sprint\Options\Custom\SelectOption;
use Sprint\Options\Custom\StringOption;
use Sprint\Options\Custom\TextareaOption;
use Sprint\Options\Custom\WysiwygOption;

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
    );
