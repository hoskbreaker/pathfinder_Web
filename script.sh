#!/bin/bash
cd /var/www/html
sudo rm -rf *
ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
sudo cp -r /home/pi/patfinderweb/* /var/www/html
sudo chmod 755 *
cd img
sudo chmod 755 *
printf "todo copiado!\n"
