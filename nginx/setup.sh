#!/bin/bash
# bash setup.sh

# source code
# sudo mkdir -p /var/www/promhodflood.org
# cd /var/www/promhodflood.org
# git clone https://github.com/arc6828/promhod

# for Laravel
cd /var/www/promhodflood.org/promhod
sudo chmod 777 -R storage
sudo chown -R www-data.www-data storage
composer install
cp .env.example .env
php artisan key:generate

# config Laravel .env manually

# nginx
cp nginx/promhodflood.org.conf /etc/nginx/sites-available/promhodflood.org
sudo ln -s /etc/nginx/sites-available/promhodflood.org /etc/nginx/sites-enabled/promhodflood.org

sudo service nginx restart