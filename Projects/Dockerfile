# Use PHP with Apache preinstalled
FROM php:8.2-apache

# Install MySQL extension for PHP
RUN docker-php-ext-install mysqli

# Copy project files into Apache's root directory
COPY . /var/www/html/

# Expose web server port
EXPOSE 80
