FROM php:7.3-rc-fpm

RUN apt-get update && apt-get install -y \
        libmcrypt-dev \
        supervisor \
        nano \
        libpq-dev \
        curl \
        zip unzip

RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql

RUN pecl install redis swoole opcache
RUN docker-php-ext-enable redis swoole opcache

EXPOSE 80

CMD ["php", "artisan", "swoole:http", "start"]
