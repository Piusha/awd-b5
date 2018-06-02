# Working with nginx

# Install nginx

    $ sudo apt-get install nginx


# Enable sites to serve web page

App configuration files are store in */etc/nginx/sites-available/sitename.conf* Once you have created app configuration make simlink to */etc/nginx/sites-enabled*

    $ sudo ln -s /etc/nginx/sites-available/sitename.conf /etc/nginx/sites-enabled/

Restart nginx server
    $ sudo service nginx restart


you can use bellow configuration file in order to serve simple web page

    server {
        listen 80; # Default Port that app need to listen

        # Set Document Direcotry
        root /home/scit/Desktop/Vl/laravel;

        #Server Name
        server_name laravel.awd.loc;

        #Index file
        index index.html index.htm index.debian-default.html index.php;

        
    }

