# citrussys
```
Disclaimer:
This project is a test project, DO NOT use it for production purposes.
The $_GET and $_POST variables are not secured.
Project is under the MIT license!
```
## Requirements

- PHP 7.4 >
- PDO
- MySql
- Apache
  - rewrite
- Composer globally installed for the bash installation

```
/admin - admin page
username: admin
password: admin
```

## Installation


### Composer
Run the command
```shell
composer install
```
As soon the composer installation finish insert the following lines to the `.env` file 

```shell
DBUSERNAME=YOUR_DATABASE_USERNAME
DBPASSWORD=YOUR_DATABASE_PASSSWORD
```
Import the `citrussys.sql` inside your `MySql` database and viola. 

### Linux Bash

Run terminal inside the folder of the project and run the following 

You might need to use `sudo` for the `chmod` 

```shell
$ chmod +x ./install.sh
$ ./install.sh
 >>ENTER DATABASE USER NAME:
 >>ENTER DATABASE PASSWORD:
```


After the installation you should need to run the following commands
```shell
cd ..
sudo chown -R www-data:www-data citrussys/
sudo chmod -R 755 citrussys/
```

Append your site link inside the `.env` file after `SITE_LINK`

```shell
SITE_LINK=https://example.com
```

Also, be sure you set up the public folder as the deployment folder

Usually the full path will be
```shell
/var/www/citrussys/public
```

p.s.
You are able to run the project as well without web server via 
```shell
php -S 127.0.0.1:8001
```