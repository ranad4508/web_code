<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Connection failed:");
}


// $TU1 = "CREATE DATABASE TU1";

// if(mysqli_query($conn,$TU1)){
//      echo "Database created successfully";
// }else{
//      echo "Error creating database.";
//  }

$sql = "CREATE TABLE student(
    id INT,
    studentname VARCHAR(30) NOT NULL,
    studentaddress VARCHAR(30) NOT NULL
)";
 $TU1 = "INSERT INTO student(id ,studentname, studentaddress)
 VALUES(1,'Bibek','New-Baneshwor'),(2,'Dinesh','Koteshwor'),(3,'Nishant','Sankhu')";

$sql1 = "SELECT * FROM TU1";
$result = mysqli_query($conn,$sql1);
if(mysqli_num_rows($result)>0){
    echo row['id'];
    echo row['studentname'];
    echo row['studentaddress'];
}
else{
    echo "0 results";
}
?>