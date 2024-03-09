FROM php:7.4-apache

# Enable Apache mod_rewrite
RUN a2enmod rewrite

# Copy PHP files into Apache web root directory
COPY . /var/www/html

# Create directories for uploads and downloads
RUN mkdir /var/www/html/uploads /var/www/html/downloads

# Set permissions for uploads and downloads directories
RUN chown -R www-data:www-data /var/www/html/uploads /var/www/html/downloads

# Expose port 80 to allow outside access
EXPOSE 80