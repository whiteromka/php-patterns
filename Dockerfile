FROM php:8.2-apache

# Установка зависимостей
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug \
    && docker-php-ext-install pdo_mysql

# Установка Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Настройка рабочей директории
WORKDIR /var/www/html
COPY . .

# Установка зависимостей
RUN composer install --optimize-autoloader

# Настройка Apache
RUN chown -R www-data:www-data /var/www/html \
    && a2enmod rewrite