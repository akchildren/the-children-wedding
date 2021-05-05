FROM php:8.0.5-fpm
RUN apt-get update -y && apt-get install -y libmcrypt-dev openssl  curl
RUN docker-php-ext-install pdo mcrypt mbstring
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-configure gd --with-gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/ --with-png-dir=/usr/include/
RUN docker-php-ext-install gd

WORKDIR /app
COPY .. /app
RUN composer install

CMD php artisan serve --host=127.0.0.1 --port=8000
EXPOSE 8000