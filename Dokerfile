# Docker Hub မှ Nginx နှင့် PHP-FPM ပါဝင်သော image တစ်ခုကို အခြေခံအဖြစ် အသုံးပြုသည်။
FROM richarvey/nginx-php-fpm:latest

# Application code ကို ထားရှိမည့် နေရာကို သတ်မှတ်သည်။
WORKDIR /var/www/html

# GitHub မှ Project code အားလုံးကို container ထဲသို့ ကူးယူသည်။
COPY . /var/www/html

# Composer ဖြင့် Dependencies များကို Install လုပ်သည်။
RUN composer install --no-dev --optimize-autoloader

# Laravel ရဲ့ storage/cache folders များကို web server က စာရေးနိုင်၊ ပြင်နိုင်အောင် ခွင့်ပြုသည်။
RUN chown -R www-data:www-data storage bootstrap/cache \
    && chmod -R 775 storage bootstrap/cache

# Container သည် Port 80 မှ incoming request များကို လက်ခံရန် သတ်မှတ်သည်။
EXPOSE 80
