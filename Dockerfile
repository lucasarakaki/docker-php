# base image
FROM php:8.3-fpm
ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN apt-get update && apt-get install -y \
    zip \
    unzip \
    git \
    libmariadb-dev && \
    install-php-extensions gd xdebug pdo_mysql mysqli intl opcache
WORKDIR /var/www/html