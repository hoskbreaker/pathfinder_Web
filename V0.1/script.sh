#!/bin/bash
sudo chmod 755 *
sudo chmod 644 *.php
cd img
sudo chmod 755 *
cd /var/www/html
sudo rm -rf *
sudo ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
sudo cp -r /home/pi/* /var/www/html
printf "todo copiado!\n"
