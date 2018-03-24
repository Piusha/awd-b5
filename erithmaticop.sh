#!/bin/bash
read -p "enter value : " x y



ans=`expr $x + $y`
#ans=$((x + y)) 

echo "$x + $y = $ans"
