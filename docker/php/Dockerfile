FROM php:7.2-fpm-alpine3.7

WORKDIR /srv

RUN apk add --no-cache alpine-sdk

RUN docker-php-ext-install pdo pdo_mysql mysqli

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
