FROM php:8.0-fpm

WORKDIR /var/www/html

RUN apt-get update && \
    apt-get install -y \
        libzip-dev \
        zip \
        unzip \
        git \
        curl \
        libpng-dev \
        libonig-dev \
        libxml2-dev \
        libcurl4-openssl-dev \
        libssl-dev \
        libpq-dev \
        libmcrypt-dev \
    && docker-php-ext-install \
        bcmath \
        pdo_mysql \
        mysqli \
        zip \
        gd \
        mbstring \
        xml \
        curl \
    && pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN curl --silent --show-error https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

COPY . /var/www/html

RUN chown -R www-data:www-data /var/www/html && \
    chmod -R 777 storage/ bootstrap/ && \
    composer install --optimize-autoloader --no-interaction --no-progress

EXPOSE 9000

CMD ["php-fpm"]
