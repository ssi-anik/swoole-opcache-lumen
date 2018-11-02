FROM php:7.3-rc-fpm

RUN apt-get update && apt-get install -y nano curl zip unzip nginx

RUN rm -rf /var/lib/apt/lists/* /etc/nginx/sites-enabled/default

RUN docker-php-ext-install pdo pdo_mysql

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY ./deploy/lumen.conf /etc/nginx/sites-available/default.conf

RUN ln -s /etc/nginx/sites-available/default.conf /etc/nginx/sites-enabled/default

RUN mv /usr/local/etc/php-fpm.d/www.conf /usr/local/etc/php-fpm.d/www.conf.backup
COPY ./deploy/www.conf /usr/local/etc/php-fpm.d/www.conf

COPY . /app
WORKDIR /app

RUN usermod -a -G www-data root
RUN chgrp -R www-data storage

RUN chown -R www-data:www-data ./storage
RUN chmod -R 0777 ./storage

RUN chmod +x ./deploy/entrypoint

ENTRYPOINT ["./deploy/entrypoint"]

EXPOSE 80

CMD ["php-fpm"]