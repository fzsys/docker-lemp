FROM php:7.4-fpm-alpine

RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql

RUN apk update && apk add bash

RUN apk add php-soap

RUN apk add libxml2-dev

RUN mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/conf.d/php.ini"

RUN apk add libpng-dev \
    && docker-php-ext-install gd \
    && docker-php-ext-enable gd

RUN docker-php-ext-install opcache \
    && docker-php-ext-enable opcache

RUN apk add ${PHPIZE_DEPS} \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN docker-php-ext-install xml
RUN docker-php-ext-install soap
RUN docker-php-ext-enable xml
RUN docker-php-ext-enable soap



