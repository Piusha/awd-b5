#!/bin/bash


#!/bin/sh

while  true
do
    read -p "User name : " username
    read -p "Password  : " password
    USERNAME="$(cat credentials.txt | cut -d ':' -f1 )"
    PASSWORD="$(cat credentials.txt | cut -d ':' -f2 )"
    if [ $username = $USERNAME -a $password = $PASSWORD ]
    then
        ./read.sh $username
        exit
    else
        echo ".........OOPS Try again"
    fi  
done



