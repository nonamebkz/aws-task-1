FROM php:8.2-fpm-alpine

#install apa aja yg di butuhin

RUN apk add --no-cache libpng-dev libpng zip libzip-dev linux-headers

#install php apa aja yg di butuhin

RUN docker-php-ext-install gd zip pdo pdo_mysql sockets

RUN curl -sS https://getcomposer.org/installer | php -- \
     --install-dir=/usr/local/bin --filename=composer \

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app
COPY . .
RUN composer install

RUN php artisan serve --host=0.0.0.0 --port=8111
