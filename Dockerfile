FROM php:8.2-cli

WORKDIR /app

# Install system dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    curl \
    git \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    && docker-php-ext-install pdo pdo_mysql

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy project files
COPY . .

# Install dependencies
RUN composer install --no-dev --optimize-autoloader

# Set permissions (important for Laravel)
RUN chmod -R 775 storage bootstrap/cache

# Expose port
EXPOSE 10000

# Start Laravel properly
CMD php artisan serve --host=0.0.0.0 --port=10000