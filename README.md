# MY MVC 

Added to virtual hosts:

sudo nano /etc/hosts

example: 127.0.0.1 testing.com

sudo nano /etc/apache2/sites-available/000-default.conf

example:

<VirtualHost *:80>
        ServerAdmin webmaster@localhost
        ServerName testing.com
        ServerAlias *.testing.com
        DocumentRoot /var/www/Your-folder/
        <Directory "/var/www/Your-folder/">
                AllowOverride All
                Options Indexes MultiViews FollowSymLinks
                Require all granted
        </Directory>
</VirtualHost>

In order to use mod_rewrite you can type the following command in the terminal:

sudo a2enmod rewrite

Restart apache2 after

sudo service apache2 restart

Mvc is ready to start!