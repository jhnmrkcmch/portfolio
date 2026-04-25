FROM php:8.2-cli

WORKDIR /app

# =========================
# SYSTEM DEPENDENCIES
# =========================
RUN apt-get update && apt-get install -y \
    unzip curl git zip \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql

# =========================
# COMPOSER
# =========================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# =========================
# COPY PROJECT
# =========================
COPY . .

# =========================
# PHP DEPENDENCIES
# =========================
RUN composer install --no-dev --optimize-autoloader

# =========================
# NODE / VITE SETUP
# =========================
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

RUN npm install
RUN rm -rf public/build
RUN npm run build

# =========================
# PERMISSIONS
# =========================
RUN chmod -R 777 storage bootstrap/cache

# =========================
# IMPORTANT: DO NOT RUN DB HERE
# (Render DB not ready during build)
# =========================

EXPOSE 10000

# =========================
# RUNTIME COMMAND
# =========================
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000