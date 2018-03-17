#Setup Vagrant 


Download vagrant  and  virtual box 5.1 
https://www.virtualbox.org/wiki/Download_Old_Builds
https://www.vagrantup.com/downloads.html

install virtual box first and then vagrant.

Make sure to enable virtualization through CMOS setup on your PC

After all done use following commands to setup 

## vagrant up

To download os and setup 

    $ vagrant up

## vagrant ssh

login to the vagrant box. this command need to run while you are in Vagrantfile location 

    $ vagrant ssh

## exit

Logout from the Ubuntu machine

    $ exit

## vagrant halt

shutdown vagrant machine

    $ vagrant halt