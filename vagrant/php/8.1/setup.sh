#!/bin/sh
echo "Installing php 8.1"
sudo apt install software-properties-common -y > /dev/null 2>&1
sudo add-apt-repository ppa:ondrej/php -y > /dev/null 2>&1
sudo apt update -y > /dev/null 2>&1
sudo apt install php8.1-fpm -y > /dev/null 2>&1

echo "Installing php 8.1 extensions"
sudo apt install php8.1-common php8.1-pgsql php8.1-mysql php8.1-xml php8.1-xmlrpc php8.1-curl php8.1-gd php8.1-imagick php8.1-cli php8.1-dev php8.1-imap php8.1-mbstring php8.1-opcache php8.1-soap php8.1-zip php8.1-redis php8.1-intl -y > /dev/null 2>&1
