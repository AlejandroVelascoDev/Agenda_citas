FROM php:8.4-fpm

RUN apt-get update && apt-get install -y \
    build-essential \
    zip unzip curl git libpng-dev libonig-dev libxml2-dev libzip-dev \
    && docker-php-ext-install pdo_mysql zip

# Instalar Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/agendacitas.v5.3
