FROM php:8.2-apache

# Base: habilitamos rewrite por si mañana agregamos rutas limpias
RUN a2enmod rewrite

WORKDIR /var/www/html

# TODO (laptop): instalar extensiones PHP típicas (pdo_mysql, intl, zip) si las necesitamos
# TODO (laptop): agregar un vhost/DocumentRoot si cambiamos estructura public/
