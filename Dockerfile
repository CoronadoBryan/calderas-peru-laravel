# Usa una imagen base de PHP con Apache
FROM php:8.3.7-apache

# Instala dependencias básicas y herramientas necesarias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libwebp-dev \
    libxpm-dev \
    libfreetype6-dev \
    libzip-dev \
    libxml2-dev \
    libxslt1-dev \
    libicu-dev \
    unzip \
    git \
    curl \
    zip \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg --with-webp --with-xpm \
    && docker-php-ext-install -j$(nproc) gd pdo_mysql mysqli zip intl soap bcmath exif calendar \
    && apt-get clean

# Instala Composer (gestor de dependencias de PHP)
RUN curl -sSL https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer && \
    chmod +x /usr/local/bin/composer

# Instala y habilita Xdebug para depuración
RUN pecl install xdebug-3.4.0 && docker-php-ext-enable xdebug

# Copia el archivo de configuración de PHP personalizado
COPY ./php.ini /usr/local/etc/php/conf.d/php.ini

# Habilita el módulo de reescritura de Apache
RUN a2enmod rewrite

# Establece el directorio de trabajo dentro del contenedor
WORKDIR /var/www/html

# Copia los archivos del proyecto al contenedor
COPY . .

# Instala las dependencias del proyecto Laravel
RUN composer install --no-dev --optimize-autoloader

# Crea el enlace simbólico para el almacenamiento de Laravel
RUN php artisan storage:link || true

# Configura el entorno de desarrollo (si es necesario)
COPY .envDev .env

# Instala dependencias de Node.js
RUN npm install

# Asegura que los directorios necesarios existan y tengan permisos correctos
RUN mkdir -p /var/www/html/storage/logs && \
    chmod -R 775 /var/www/html/storage /var/www/html/bootstrap/cache && \
    chown -R www-data:www-data /var/www/html

# Copia el script de inicio personalizado
COPY docker-entrypoint.sh /usr/local/bin/docker-entrypoint.sh
RUN chmod +x /usr/local/bin/docker-entrypoint.sh

# Expone los puertos necesarios
EXPOSE 80 8000 5173

# Usa el script de inicio como comando predeterminado
CMD ["docker-entrypoint.sh"]

