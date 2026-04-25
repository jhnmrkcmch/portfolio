FROM php:8.2-cli

WORKDIR /app

# System dependencies
RUN apt-get update && apt-get install -y \
    unzip curl git zip \
    libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Fix permissions (IMPORTANT for Render)
RUN chmod -R 777 storage bootstrap/cache

# Remove broken cached config (VERY IMPORTANT)
RUN rm -rf bootstrap/cache/*.php

EXPOSE 10000

# Clean start (NO double clear commands)
CMD php artisan optimize:clear && php artisan serve --host=0.0.0.0 --port=10000