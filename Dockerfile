# 🚨 Base Image ကို ပြောင်းလိုက်ပါပြီ
FROM phpswoole/swoole:4.8-php8.2-alpine

# Set the working directory
WORKDIR /app

# Copy the entire application code into the container
COPY . /app

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Nginx config ကို ဒီ Image မှာ ထည့်စရာမလိုတော့ပါဘူး။
# Swoole က built-in web server ကို သုံးပါမယ်။

# Configuration and Migration
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan migrate --force || true

# Set storage permissions
RUN chmod -R 777 storage bootstrap/cache

# 🚨 Container စတင်ဖို့ Command ကို ပြောင်းပါ
# Laravel Application ကို public folder မှ စတင် run ရန်။
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
