#!/bin/sh

# update / upgrade
echo "Updating"
sudo apt-get update > /dev/null 2>&1

echo "Upgrading"
sudo apt-get -y upgrade > /dev/null 2>&1

echo "Installing Nginx"
sudo apt-get install -y nginx > /dev/null 2>&1
