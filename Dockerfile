FROM php:8.2-cli

WORKDIR /app

# System dependencies
RUN apt-get update && apt-get install -y \
    unzip curl git zip \
    libpng-dev libjpeg-dev libfreetype6-dev

# PHP extensions
RUN docker-php-ext-install pdo pdo_mysql

# Node.js (required for Vite)
RUN curl -fsSL https://deb.nodesource.com/setup_18.x | bash - \
    && apt-get install -y nodejs

# Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project
COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install frontend dependencies (safe)
RUN if [ -f package.json ]; then npm install; fi

# Build Vite (safe fallback so build never breaks deploy)
RUN if [ -f package.json ]; then npm run build || echo "Vite build skipped"; fi

# Fix permissions (VERY IMPORTANT on Render)
RUN chmod -R 777 storage bootstrap/cache

# Clean cache (prevents bootstrap crash)
RUN php artisan optimize:clear

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000