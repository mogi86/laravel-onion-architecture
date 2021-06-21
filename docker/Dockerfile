FROM php:7.4-cli
# see: https://hub.docker.com/_/php

COPY .. /usr/src/laravel-onion-architecture
WORKDIR /usr/src/laravel-onion-architecture

RUN curl -s https://getcomposer.org/installer | php
RUN mv ./composer.phar /usr/local/bin/composer

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_NO_INTERACTION 1

RUN composer install

# FYI: https://stackoverflow.com/a/54022753/12781011
# About host
CMD [ "php", "artisan", "serve", "--host", "0.0.0.0" ]
