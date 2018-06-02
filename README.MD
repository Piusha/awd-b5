# Working with nginx

# Install nginx

    $ sudo apt-get install nginx


# Enable sites to surve simple HTML page

    server {
        listen 80; # Default Port that app need to listen

        # Set Document Direcotry
        root /home/scit/Desktop/Vl/laravel;

        #Server Name
        server_name laravel.awd.loc;

        #Index file
        index index.html index.htm index.debian-default.html index.php;

        
    }

