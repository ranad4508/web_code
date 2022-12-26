<?php
#WAP to display factorial of a number.

$number = 5;
$fact = 1;
for($i = 1; $i<=$number; $i++){
$fact = $fact*$i;
}
echo 'Factorial of '.$number.' is '.$fact;
?>