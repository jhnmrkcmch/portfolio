FROM php:8.2-cli

WORKDIR /app

RUN apt-get update && apt-get install -y \
    unzip curl git zip \
    libpng-dev libjpeg-dev libfreetype6-dev \
    && docker-php-ext-install pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY . .

RUN composer install --no-dev --optimize-autoloader

RUN chmod -R 775 storage bootstrap/cache

EXPOSE 10000

CMD php artisan config:clear && php artisan config:cache && php artisan serve --host=0.0.0.0 --port=10000