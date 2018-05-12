
# PHP MVC

## Enable Mode rewrite in apapche


    $ sudo a2enmod rewrite
    $ sudo service apache2 restart

## Enable directory listining


    <VirtualHost *:80>
        <Directory /var/www/html>
            Options Indexes FollowSymLinks MultiViews
            AllowOverride All
            Require all granted
        </Directory>

        . . .
    </VirtualHost>


You can fine (More Details)[https://www.digitalocean.com/community/tutorials/how-to-rewrite-urls-with-mod_rewrite-for-apache-on-ubuntu-16-04] from (here)[https://www.digitalocean.com/community/tutorials/how-to-rewrite-urls-with-mod_rewrite-for-apache-on-ubuntu-16-04]  