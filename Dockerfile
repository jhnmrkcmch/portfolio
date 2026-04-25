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
# NODE 20 (IMPORTANT FIX)
# =========================
RUN curl -fsSL https://deb.nodesource.com/setup_20.x | bash - \
    && apt-get install -y nodejs

# =========================
# CLEAN FRONTEND BUILD
# =========================
RUN rm -rf node_modules package-lock.json public/build

RUN npm install --no-audit --no-fund

# Force Linux-safe build environment
ENV npm_config_platform=linux
ENV npm_config_arch=x64

RUN npm run build

# =========================
# PERMISSIONS
# =========================
RUN chmod -R 777 storage bootstrap/cache

# =========================
# IMPORTANT: DO NOT MIGRATE HERE (optional but safer)
# =========================

EXPOSE 10000

# =========================
# START SERVER
# =========================
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000