<?php
#WAP to find out greatest number among three numbers.

$numOne = 7;
$numTwo = 9;
$numThree = 4;

if($numOne>$numTwo){
    if($numOne>=$numThree){
        echo $numOne.' is greatest number';
    }
    else{
        echo $numThree.' is greatest number';
    }
}
else{
    if($numTwo>=$numThree){
        echo $numTwo.' is greatest number';
    }
    else{
        echo $numThree.' is greatest number';
    }
}
?>