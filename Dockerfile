# ================
# Stage 1: Build assets (Node)
# ================
FROM node:20 AS node-builder

WORKDIR /app

# Copy package.json & lock file dulu biar caching lebih efisien
COPY package*.json vite.config.js ./
RUN npm install

# Copy seluruh project
COPY . .

# Build assets (hasilnya ke public/build)
RUN npm run build

# ================
# Stage 2: Laravel + PHP
# ================
FROM php:8.2-cli

# Install dependencies untuk ekstensi Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    libzip-dev \
    libpq-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
       pdo_mysql \
       pgsql \
        pdo_pgsql \
       bcmath \
       gd \
       intl \
       zip

# Install Composer dari image resmi
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

WORKDIR /app

# Copy seluruh project (tanpa vendor & node_modules karena sudah diignore .dockerignore)
COPY . .

# Copy hasil build assets dari Node stage
COPY --from=node-builder /app/public/build /app/public/build

# Install dependency PHP
RUN composer install --optimize-autoloader --no-scripts --no-interaction --prefer-dist

# Expose port Railway
EXPOSE 8080

# Jalankan Laravel
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
