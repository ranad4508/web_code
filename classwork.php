<?php
/*
1)WAP in php to display folllowing list using array
    a. Bachelor in Computer Application
    b. Bachelor in Information Management
    c. Bachelor in Business Admininstration
2) Write HTML and CSS code to display following code
    Home | Contact | About | Services
    a. When hovered background should be blue and text white.
    b. When active text color should  be red. 
3)WAP in php to terminate the script if user gives 25 as an input value.
4)Write a XML code to give information about exam notice to students.    
5) wap in php to create a function that accepts two parameter, 
one array and other value if the given value is present in an array display value found
*/

$courses = array("a"=>"Bachelor in Computer Application"
                 ,"b"=>"Bachelor in Information Management"
                 ,"c"=>"Bachelor in Business Admininstration");
foreach($courses as $key=> $value){
    echo"$key . $value <br>";
}

?>


<?php
$num =5;
if($num==25){
    die();
}
else{
    echo"Not equal to 25".$num;
}

?>


<?php

function Search($value, $array)
{
	return (array_search($value, $array));
}
$array = array("Bibek","Dinesh","Nishant","Vuntey","Luffy");
$value = "Dinesh";
print_r ($value ." is present in the array at position");  
//will return the position of search value in the array  
print_r(Search($value, $array));
?>

