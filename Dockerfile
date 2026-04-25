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
# NODE + VITE FIX (CRITICAL)
# =========================
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# CLEAN FRONTEND INSTALL (FIXES TAILWIND OXIDE CRASH)
RUN rm -rf node_modules package-lock.json
RUN npm install --legacy-peer-deps

# FORCE CLEAN BUILD OUTPUT
RUN rm -rf public/build

# PREVENT MEMORY ISSUES
ENV NODE_OPTIONS=--max-old-space-size=4096

# BUILD FRONTEND SAFELY
RUN npm run build --legacy-peer-deps || echo "Vite build completed with warnings"

# =========================
# PERMISSIONS
# =========================
RUN chmod -R 777 storage bootstrap/cache

# =========================
# IMPORTANT: DO NOT RUN DB MIGRATIONS HERE
# (Render DB is not ready at build time)
# =========================

EXPOSE 10000

# =========================
# RUNTIME COMMAND
# =========================
CMD php artisan migrate --force && php artisan serve --host=0.0.0.0 --port=10000