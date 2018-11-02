FROM php:7.3-rc-fpm

RUN apt-get update && apt-get install -y nano curl zip unzip

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN pecl install redis swoole opcache
RUN docker-php-ext-enable redis swoole opcache

COPY . /app
WORKDIR /app

RUN mv /usr/local/etc/php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.conf.backup
COPY ./deploy/www.conf /usr/local/etc/php-fpm.d/www.conf

RUN usermod -a -G www-data root
RUN chgrp -R www-data storage

RUN chown -R www-data:www-data ./storage
RUN chmod -R 0777 ./storage

RUN chmod +x ./deploy/entrypoint

ENTRYPOINT ["./deploy/entrypoint"]

EXPOSE 80

CMD ["php-fpm"]