# Stage 1: Build assets
FROM node:20-slim AS frontend-builder
WORKDIR /app
COPY package*.json ./
RUN npm install
COPY . .
RUN npm run build

# Stage 2: App run environment
FROM php:8.2-fpm-alpine

# Default Laravel Env configs
ENV APP_ENV=production
ENV APP_DEBUG=true
ENV APP_KEY=base64:zZlXoI6R5eTj80q8uT7VbE4h9fJ6wG3d5Y9a8B7c6D0=
ENV LOG_CHANNEL=stderr
ENV SESSION_DRIVER=cookie
ENV DB_CONNECTION=sqlite
ENV DB_DATABASE=/var/www/html/database/database.sqlite

# Install system dependencies and PHP extensions
RUN apk add --no-cache \
    nginx \
    supervisor \
    curl \
    libpng-dev \
    libxml2-dev \
    zip \
    unzip \
    git \
    oniguruma-dev

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html

# Copy app files
COPY . .

# Create empty SQLite database and set permissions
RUN touch database/database.sqlite && \
    chown -R www-data:www-data database

# Copy built frontend assets from Stage 1
COPY --from=frontend-builder /app/public/build ./public/build

# Install PHP dependencies
RUN composer install --no-interaction --optimize-autoloader --no-dev

# Setup configs
COPY docker/nginx.conf /etc/nginx/nginx.conf
COPY docker/supervisord.conf /etc/supervisord.conf

# Setup logs and temp files directory
RUN mkdir -p /var/log/nginx && \
    mkdir -p /var/run && \
    chown -R www-data:www-data /var/log/nginx /var/run

# Set storage and cache permissions
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

EXPOSE 80

CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]
