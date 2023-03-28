FROM php:fpm-alpine3.15

# Install PHP extensions
RUN apk update && apk add  \
    libzip-dev \
    zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && \
    install-php-extensions zip sodium

RUN apk add --update nodejs npm

RUN apk add chromium

ENV PUPPETEER_SKIP_CHROMIUM_DOWNLOAD true 

RUN npm install puppeteer