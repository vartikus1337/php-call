FROM php:8.0-apache

# Install necessary PHP extensions
RUN docker-php-ext-install mysqli pdo_mysql

# Configure Apache to listen on port 9000
RUN sed -i 's/80/9000/g' /etc/apache2/ports.conf && \
    sed -i 's/:80/:9000/g' /etc/apache2/sites-enabled/000-default.conf

# Copy application source code to the container
COPY src/ /var/www/html/

# Set permissions for the Apache server
RUN chown -R www-data:www-data /var/www/html/ && \
    chmod -R 755 /var/www/html/