<?php
#Write a program to check whether the number is exactly divisible by 7 and not by 11.
$n = 77;
if(($n%7==0) && ($n%11 !=0)){
    echo $n.' is divisible by 7 and not by 11';
}
else
echo $n.' is divisible by 7 and 11';
?>