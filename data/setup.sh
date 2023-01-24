#!/bin/bash

sudo apt-get update
sudo apt-get install apache2 -y

#configuring web server 

sudo apt-get install php -y
sudo systemctl enable apache2
sudo systemctl start apache2


#putting content on our webserver
sudo rm /var/www/html/index.html
cp /data/app/* /var/www/html/


