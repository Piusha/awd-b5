#!/bin/bash

read -p "echo number" n

case $n in
    1)
        echo 'This is number 1'
        ;;
    2)
        echo 'This is number 2'
        ;;
    3)
        echo 'This is number 3'
        ;;
    *)
        echo "Default condition to be executed"
        ;;
esac
