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

# configure fastcgi with php

Inorder to execute php we need to configur nginx as follow. you need to edit your site configuration file as follows

    server {
        listen 80;

        root /home/scit/Desktop/Vl/laravel;

        server_name laravel.awd.loc;

        index index.html index.htm index.debian-default.html index.php;

        location / {
           try_files $uri $uri/ /index.php?url=$uri&$args;
        }

        location ~ \.php$ {
            
            
            fastcgi_pass unix:/run/php/php5.6-fpm.sock;
            fastcgi_index index.php;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
            include fastcgi_params;

            #fastcgi_param QUERY_STRING      $query_string;
            fastcgi_param SCRIPT_NAME $fastcgi_script_name;
            fastcgi_split_path_info ^(.+\.php)(/.+)$;

        }
    }

and then restart the server

When you are set 

     fastcgi_pass unix:/run/php/php5.6-fpm.sock;

You need to find correct php socket version form the /run/php/ directory.



## Start correct PHP version 

When you are installing php it get sotred in **/etc/php** location.

## Set correct PHP CLI version

    $  sudo update-alternatives --config php

    $ ll /etc/php

You can see currently installed php versions after executing abow command

In order to start correct PHP version you need run

    $ sudo sudo /etc/init.d/php7.1-fpm start

In order to stop current php version 

    $ sudo /etc/init.d/php5.6-fpm stop

Once you start correct php version you need to change following file based on the current active php version

    fastcgi_pass unix:/run/php/php7.1-fpm.sock 

