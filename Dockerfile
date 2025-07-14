# Use official PHP image with Apache
FROM php:8.1-apache

# Enable mysqli and pdo_mysql extensions
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy your app code to Apache's document root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Set proper permissions (optional, depends on your setup)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80