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

CMD php-fpm

# SET ENVIROMENT EXAMPLE FROM: https://mhdzaherghaibeh.name/2018/05/23/using-swoole-php-7-2-docker-image/
#ENV APP_ENV ${APP_ENV:-production}
#ENV APP_DEBUG ${APP_DEBUG:-false}
#ENV APP_TIMEZONE ${APP_TIMEZONE:-UTC}
#ENV SWOOLE_HTTP_PORT ${SWOOLE_HTTP_PORT:-80}
#ENV SWOOLE_HTTP_HOST ${SWOOLE_HTTP_HOST:-"0.0.0.0"}