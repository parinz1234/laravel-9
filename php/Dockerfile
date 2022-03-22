FROM php:fpm-alpine3.15
# Install PHP extensions
RUN apk update && apk add  \
    libzip-dev \
    zip

RUN docker-php-ext-install zip