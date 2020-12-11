# CSI-3450-Project
This  is the repo for our CSI 3450 DB Project 

The Prerequisites - This demo was executed on a linux server using:
1. Ubuntu 18.04 Server
2. Google Chrome
3. MySQL
4. PHP
5. NGINX

Installing Required Components:

#--NGINX--#
1. sudo apt update
2. sudo apt install nginx
3. sudo ufw allow in "Nginx"

#--MySQL Server--#
1. sudo apt install mysql-server
2. sudo mysql_secure_installation

#--PHP--#
1. sudo apt install php-fpm php-mysql

#--Configure NGINX--#
1. sudo vim /etc/nginx/sites-available/your_domain
2. Change the path for root in line 4 to the directory where the website is
3. sudo ln -s /etc/nginx/sites-available/your_domain /etc/nginx/sites-enabled/
4. sudo systemctl reload nginx

#--Check--#
1. To check if site is running go to ip of server on your network