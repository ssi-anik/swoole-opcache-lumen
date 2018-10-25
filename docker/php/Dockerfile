FROM php:7.3-rc-fpm

RUN apt-get update && apt-get install -y nano curl zip unzip

RUN docker-php-ext-install pdo pdo_mysql

RUN pecl install redis opcache
RUN docker-php-ext-enable redis opcache

CMD [ "php-fpm" ]