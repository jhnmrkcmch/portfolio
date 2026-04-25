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

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Fix Laravel permissions (IMPORTANT)
RUN chmod -R 775 storage bootstrap/cache

# Cache config for performance
RUN php artisan config:clear && php artisan config:cache

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000