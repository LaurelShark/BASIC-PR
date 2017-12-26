FROM php:7.0-apache
RUN docker-php-ext-install mysqli pdo pdo_mysql
COPY ./php.ini /usr/local/etc/php/
COPY basic /var/www/html/
