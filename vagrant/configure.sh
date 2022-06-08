#!/bin/sh

echo "NPM install"
sudo sudo apt-get install npm -y  > /dev/null 2>&1

echo "Configuring Nginx"
sudo cp /var/www/vagrant/nginx/default /etc/nginx/sites-available/default > /dev/null 2>&1

echo "Restarting Nginx"
sudo service nginx restart > /dev/null 2>&1

cd /var/www/

echo "Download composer packages"
php composer install > /dev/null 2>&1

if [ ! -f ".env" ]; then
    echo "Create env file"
    cp .env.example .env > /dev/null 2>&1
fi

echo "Artisan key generate"
php artisan key:generate > /dev/null 2>&1
