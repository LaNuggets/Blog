FROM php:8.4-apache

RUN docker-php-ext-install mysqli pdo pdo_mysql

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

RUN a2enmod rewrite

COPY . /var/www/html/

WORKDIR /var/www/html

RUN composer install --no-dev

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html

COPY ./000-default.conf /etc/apache2/sites-available/000-default.conf

COPY .env.example /var/www/html/.env