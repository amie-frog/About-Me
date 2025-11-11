# 🚨 Nginx/PHP-FPM Base Image ကို ပြန်သုံးပါ
FROM richarvey/nginx-php-fpm:latest

# Set the working directory
WORKDIR /var/www/html

# Copy the custom Nginx config file to the correct location
# Nginx ကို Laravel public folder ကို ညွှန်ခိုင်းပါတယ်။
COPY nginx-site.conf /etc/nginx/sites-available/default.conf

# Copy the entire application code into the container
COPY . /var/www/html

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# Configuration and Migration
# (Render Free Tier တွင် Artisan Command များကို Build Time တွင် run ရန်)
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan migrate --force || true

# Set permissions for the storage folder (အရေးကြီးဆုံး)
# storage/cache များကို web server က စာရေးခွင့်ပေးရန်။
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Expose the port (Nginx runs on port 80)
EXPOSE 80

# CMD ကို ထည့်စရာမလိုပါ။ Base Image က Nginx နဲ့ PHP-FPM ကို အလိုအလျောက် စတင်ပေးမှာပါ။
