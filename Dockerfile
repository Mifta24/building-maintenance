# Gunakan PHP 8.2 dengan Composer
FROM php:8.2-cli

# Install dependencies untuk ekstensi Laravel
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libicu-dev \
    libzip-dev \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install \
       pdo_mysql \
       bcmath \
       gd \
       intl \
       zip

# Install Composer dari image resmi
COPY --from=composer:2.7 /usr/bin/composer /usr/bin/composer

# Set direktori kerja
WORKDIR /app

# Copy semua file project ke container
COPY . .

# Install dependency PHP (tanpa scripts biar cepat)
RUN composer install --optimize-autoloader --no-scripts --no-interaction --prefer-dist

# Expose port Railway (Railway pakai PORT=8080 default)
EXPOSE 8080

# Jalankan Laravel pakai built-in server
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8080"]
