#!/bin/bash
sudo chmod 755 *
cd img
sudo chmod 755 *
cd ..
cd css
sudo chmod 755 *
cd ..
cd includes
sudo chmod 755 *
cd ..
cd js
sudo chmod 755 *
cd /var/www/html
sudo rm -rf *
sudo ln -s /usr/share/phpmyadmin /var/www/html/phpmyadmin
sudo cp -r /home/pi/* /var/www/html
sudo chmod 755 *
printf "todo copiado!\n"
