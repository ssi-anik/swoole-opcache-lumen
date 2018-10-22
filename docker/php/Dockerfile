FROM php:7.3-rc-fpm

RUN apt-get update && apt-get install -y \
        libmcrypt-dev \
        supervisor \
        nano \
        libpq-dev \
        curl \
        zip unzip

RUN docker-php-ext-install pdo pdo_mysql pdo_pgsql

RUN pecl install redis
RUN docker-php-ext-enable redis

RUN docker-php-ext-install opcache
RUN docker-php-ext-enable opcache

CMD [ "php-fpm" ]