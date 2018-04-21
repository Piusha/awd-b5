# Configure Dev ENV woth Apache

## Install Apache2 

Before install make sure to update your ubuntu version

    $ sudo apt-get update

    $ sudo apt install apache2

## Create Multiple sites on Ubuntu


Create Site Document directory 

    $ sudo mkdir -p /var/www/b5.awd.com


Create New Virtual Host Files

    $ sudo cp /etc/apache2/sites-available/000-default.conf /etc/apache2/sites-available/b5.awd.com.conf

    $ sudo nano /etc/apache2/sites-available/b5.awd.com.conf

Change Virtual Host

    <VirtualHost *:80>
        ServerAdmin admin@example.com
        ServerName b5.awd.com
        #ServerAlias www.example.com
        DocumentRoot /var/www/b5.awd.com
        ErrorLog ${APACHE_LOG_DIR}/error.log
        CustomLog ${APACHE_LOG_DIR}/access.log combined
    </VirtualHost>

Enable Sites
    
    $ sudo a2ensite b5.awd.com.conf


Restart Apache Server

    $ sudo service apache2 restart


(click)[https://www.digitalocean.com/community/tutorials/how-to-set-up-apache-virtual-hosts-on-ubuntu-16-04]
to get more information how to configure multiple sites on the ubuntu


## Install PHP7

    $ sudo apt-get install -y php7.0 libapache2-mod-php7.0 php7.0-cli php7.0-common php7.0-mbstring php7.0-gd php7.0-intl php7.0-xml php7.0-mysql php7.0-mcrypt php7.0-zip





