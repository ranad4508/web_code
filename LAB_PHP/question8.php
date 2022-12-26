<?php
// WAP to interpret the following result

// If percentage greater than or equal to 80 = distinction.

// If percentage < 80 and percentage >= 70 = First Division

// If percentage < 70 and percentage >= 55 = Second Division

// If percentage < 55 and percentage >= 35 = Third Division

// Else fail

$percentage = 93;
if($percentage>100){
    echo 'Invalid percentage';
}
else if($percentage>= 80){
    echo 'Distinction';
}
else if($percentage >=70 && $percentage<80){
    echo 'First Division';
}
else if($percentage>= 55 && $percentage <70){
    echo 'Second Division';
}
else if($percentage >=35 && $percentage<55){
    echo 'Third Division';
} 
else
    echo 'Fail';
?>