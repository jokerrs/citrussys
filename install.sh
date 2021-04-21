#!/bin/bash
composer install
read -p "ENTER DATABASE USER NAME: " dbuser
read -s -p "ENTER DATABASE PASSWORD: " dbpassword
echo "create database citrussys;" | mysql -u $dbuser -p
mysql --user=$dbuser --password=$dbpassword citrussys < citrussys.sql
sed -i "1i DBUSERNAME=$dbuser" .env
sed -i "2i DBPASSWORD=$dbpassword" .env
echo
echo -e "The application is ready for use"