# Use a base image with Nginx and PHP-FPM
FROM richarvey/nginx-php-fpm:latest

# Set the working directory
WORKDIR /var/www/html

# Copy the custom Nginx config file to the correct location
# This overwrites the default config to point to the 'public' folder.
COPY nginx-site.conf /etc/nginx/sites-available/default.conf

# Copy the entire application code into the container
COPY . /var/www/html

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Configuration and Migration (Keep these steps for database/cache)
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan migrate --force || true

# Set permissions for the storage folder
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Expose the port (The container runs on port 80)
EXPOSE 80
