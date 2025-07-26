FROM php:8.3-apache

RUN apt update && apt install -y zip unzip git libicu-dev libonig-dev && \
    docker-php-ext-install pdo pdo_mysql intl mbstring

RUN a2enmod rewrite

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

COPY .env.example /var/www/html/.env
WORKDIR /var/www/html
COPY . .
RUN mkdir -p writable/cache writable/logs writable/session writable/uploads writable/debugbar


RUN ls -la && cat composer.json

RUN usermod -u 1000 www-data && groupmod -g 1000 www-data

RUN composer install --no-dev --no-interaction --prefer-dist --ignore-platform-reqs

RUN chown -R www-data:www-data /var/www/html && chmod -R 755 /var/www/html
RUN chown -R www-data:www-data /var/www/html/writable && \
    chmod -R ug+rwX /var/www/html/writable



RUN sed -i 's|DocumentRoot /var/www/html|DocumentRoot /var/www/html/public|' /etc/apache2/sites-available/000-default.conf

RUN echo '<Directory /var/www/html/public>\n\
    Options Indexes FollowSymLinks\n\
    AllowOverride All\n\
    Require all granted\n\
</Directory>' >> /etc/apache2/apache2.conf

RUN whoami && id && [ -d writable/cache ] && ls -ld writable/cache || echo "Cache folder missing"