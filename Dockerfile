# Use a base image with Nginx and PHP-FPM
FROM richarvey/nginx-php-fpm:latest

# Set the working directory
WORKDIR /var/www/html

# Copy the entire application code into the container
COPY . /var/www/html

# Install Composer dependencies
RUN composer install --no-dev --optimize-autoloader

# >>> 🚨 အသစ်ထပ်ထည့်ရမည့် အပိုင်း 🚨 <<<

# Configuration များကို Cache လုပ်ပြီး Database Migration များကို run ပါ
# Database Environment Variables များကို Render တွင် ထည့်ထားရပါမည်။
RUN php artisan config:cache
RUN php artisan route:cache

# Database Tables များကို ဖန်တီးပါ
# '|| true' ကို ထည့်ခြင်းဖြင့် Migration failed ဖြစ်ရင်တောင် Build က ဆက်သွားအောင် လုပ်ပါတယ်။
# တကယ်လို့ App မှာ Migration မရှိရင် ဒီ Command က Error ပေးမှာ မဟုတ်ပါဘူး။
RUN php artisan migrate --force || true

# >>> 🚨 ပြီးဆုံး 🚨 <<<

# Set permissions for the storage folder
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Expose the port (The container runs on port 80)
EXPOSE 80
