FROM php:fpm-alpine3.15

# Install PHP extensions
RUN apk update && apk add  \
    libzip-dev \
    zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN docker-php-ext-install zip