FROM php:7.2.5-apache

RUN docker-php-ext-install \
    pdo_mysql \
    && a2enmod \
    rewrite

EXPOSE 80
