FROM php:8.2-fpm

# ARG uid
# RUN groupadd -f www-data && groupadd -f root && useradd -r -g www-data -G root -u $uid -d /home/devuser devuser
# RUN mkdir -p /home/devuser/.composer && \
#     chown -R devuser:devuser /home/devuser

# 1. Install development packages and clean up apt cache.
RUN apt-get update && apt-get install -y \
    libicu-dev \
    libpq-dev \
    libmcrypt-dev \
    default-mysql-client \
    git \
    zlib1g-dev \
    libzip-dev \
    zip \
    unzip \
    libpng-dev \
    curl \
    libcurl4-openssl-dev \
    libxml2-dev \
    vim \
    nginx \
 && rm -rf /var/lib/apt/lists/*

# Install Imagick
RUN apt-get update && apt-get install -y \
    libmagickwand-dev --no-install-recommends \
    && pecl install imagick \
    && docker-php-ext-enable imagick

# Create nginx user
#RUN useradd -r nginx

# Set the working directory
WORKDIR /var/www/html

# Copia el archivo de configuración de Nginx
COPY nginx/default.local.conf /etc/nginx/sites-available/default

# Configura PHP-FPM
COPY php-fpm/www.conf /usr/local/etc/php-fpm.d/www.conf

# Cambiar permisos del directorio storage
RUN mkdir -p /var/www/html/storage \
    && chown -R www-data:www-data /var/www/html/storage \
    && chmod -R 775 /var/www/html/storage

RUN docker-php-ext-install \
    intl \
    exif \
    pcntl \
    pdo \
    pdo_mysql \
    mysqli \
    pdo_pgsql \
    pgsql \
    opcache \
    zip \
    xml \
    gd \
    curl \
    sockets

# Composer.
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

EXPOSE 80

# Start Nginx and PHP-FPM
CMD ["sh", "-c", "php-fpm -D && nginx -g 'daemon off;'"]