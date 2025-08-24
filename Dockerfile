# Use official PHP image with Apache
FROM php:8.1-apache

# Install PDO and PostgreSQL extensions
RUN apt-get update && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo pdo_pgsql pgsql

# Copy your app code to Apache's document root
COPY . /var/www/html/

# Set working directory
WORKDIR /var/www/html/

# Set proper permissions (optional)
RUN chown -R www-data:www-data /var/www/html

# Expose port 80
EXPOSE 80
