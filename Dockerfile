FROM php:8.0-fpm

# Installeer de PDO-extensie voor MySQL
RUN docker-php-ext-install pdo pdo_mysql
