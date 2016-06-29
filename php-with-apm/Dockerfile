FROM php:7.0-apache

RUN apt-get update && apt-get install -y libsqlite3-dev libmysqlclient-dev  \
    && pecl install apm-2.1.1 \
    && docker-php-ext-enable apm