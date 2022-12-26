<?php
#WAP to display multiplication table upto 10 of a number.

$number = 7;
echo 'Multiplication of number '.$number.' is :<br>';
for($i = 1; $i<=10; $i++){
    
    echo $number.' * '.$i.' = '.$number*$i.'<br>';
}
?>