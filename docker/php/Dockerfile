FROM phpdockerio/php:8.3-fpm

RUN apt-get update \
    && apt-get -y --no-install-recommends install \
    php8.3-dev \
    php8.3-gd \
    php8.3-imagick \
    php8.3-intl \
    php8.3-interbase \
    php8.3-mbstring \
    php8.3-mcrypt \
    php8.3-memcache \
    php8.3-memcached \
    php8.3-mysql \
    php8.3-opcache \
    php8.3-soap \
    php8.3-zip \
    php8.3-xdebug \
    msmtp \
    msmtp-mta \
    sudo \
    && apt-get clean && rm -rf /var/lib/apt/lists/* /tmp/* /var/tmp/* /usr/share/doc/*

COPY ./php.ini /etc/php/8.3/fpm/conf.d/90-php.ini
COPY ./php.ini /etc/php/8.3/cli/conf.d/90-php.ini
COPY ./msmtprc /etc/msmtprc

RUN usermod -u 1000 www-data

WORKDIR /usr/local
COPY ./composer-setup.sh ./
RUN bash composer-setup.sh
RUN rm composer-setup.sh

WORKDIR "/var/www/bitrix"

EXPOSE 9000
