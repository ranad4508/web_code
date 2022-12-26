<?php
//WAP in php to find whether the given number is prime or not.

$a=7;
$b= $a/2;
$dis =0;
for($i=2;$i<=$b;$i++){
    if($a%$i == 0){
        echo"It is not prime number.";
        $dis = 1;
    }

}
if($dis == 0){
    echo"$a is prime number";
}

/*WAP in php to find factorial of a number
WAP in php to find sum of even numbers between two numbers
WAP in php to declare an associative array and display all its elements
WAP in php to declare two array of 5 elements and find the sum of all elements
*/

?>


