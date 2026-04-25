FROM php:8.2-cli

WORKDIR /app

# ========================
# SYSTEM DEPENDENCIES
# ========================
RUN apt-get update && apt-get install -y \
    unzip curl git zip \
    libpng-dev libjpeg-dev libfreetype6-dev \
    libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pdo_mysql

# ========================
# COMPOSER
# ========================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# ========================
# COPY APP
# ========================
COPY . .

# ========================
# PHP DEPENDENCIES
# ========================
RUN composer install --no-dev --optimize-autoloader

# ========================
# NODE (MATCH LOCAL BUILD)
# ========================
# Install Node
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# IMPORTANT: clean EVERYTHING (prevents cross-OS issues)
RUN rm -rf node_modules
RUN rm -rf package-lock.json
RUN rm -rf public/build

# Install fresh Linux-compatible dependencies
RUN npm install --no-audit --no-fund

# Force correct environment for native modules
ENV npm_config_platform=linux
ENV npm_config_arch=x64

# Build frontend
RUN npm run build

# ========================
# PERMISSIONS
# ========================
RUN chmod -R 777 storage bootstrap/cache

EXPOSE 10000

# ========================
# RUNTIME
# ========================
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000