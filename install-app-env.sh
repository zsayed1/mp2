#!/bin/bash
sudo apt-get update
sudo apt-get install zip unzip
sudo apt-get -y install git apache2 php-simplexml php-gd libapache2-mod-php7.0 php php-mysql


curl -sS https://getcomposer.org/installer |sudo php

sudo php composer.phar require aws/aws-sdk-php

sudo systemctl restart apache2

sudo  git clone https://zsayed1:Github3701@github.com/illinoistech-itm/zsayed1

sudo rm -r /var/www/html/*
sudo mkdir /var/www/html/vendor
sudo mv vendor/* /var/www/html/vendor
sudo mv zsayed1/ITMO-544/Mini-project/*.php /var/www/html/
sudo mkdir /var/www/html/after
sudo chmod 777 /var/www/html/after
