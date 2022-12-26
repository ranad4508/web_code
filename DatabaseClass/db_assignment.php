<?php
$servername = "localhost";
$username  ="root";
$password  = "";
$dbname = "school";
//Create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//Check connection
if(!$conn){
    die ("Connection failed:".mysqli_connect_error());
}
else
{
    echo"Connected";
}

//create database
// $school = "CREATE DATABASE school";
// if(mysqli_query($conn,$school)){
//     echo "database created successfully";
// }
// else{
//     echo "not created";
// }
// if(mysqli_select_db($conn,'school')){
//     echo" You Baka!!!";#check database
// }

// $school = "INSERT INTO student(id ,student_name ,student_password)
//     VALUES (1,'Bibek','Kathmandu')";
    $school = "INSERT INTO student(id ,student_name ,student_password)
    VALUES (8,'Krypton','Kiodsfjk'),(9,'Pain','Naruto'),(10,'Vuntey','Nishant')";
    //  $school = "INSERT INTO student(id ,student_name ,student_password)
    // VALUES (5,'Oham','Kiodsfjk')";
   

if(mysqli_query($conn,$school)){
    echo'Table user created successfully. ';
}else
{
    echo'Dattebayo!!!';
}
// mysqli_close($conn);
?>