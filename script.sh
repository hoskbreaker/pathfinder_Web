#!/bin/bash
cd /var/www/html
sudo rm -rf *
ln -s /usr/share/phpmyadmin /var/www/phpmyadmin
sudo cp -r /home/pi/patfinderweb/* /var/www/html
sudo chmod 755 *
printf "todo copiado!\n"
