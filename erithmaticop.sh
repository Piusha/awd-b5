#!/bin/bash
read -p "enter value : " a b



#ans=`expr $x + $y`
#ans=$((x + y)) 
ans=$[ a == b ]

echo "$a + $b = $ans"
