<?php
$servername = "localhost";
$username  ="root";
$password  = "";
//Create connection
$conn = mysqli_connect($servername,$username,$password);
//Check connection
if(!$conn){
    die ("Connection failed:".mysqli_connect_error());
}
else
{
    echo"Connected<br>";
}

$sql = "create database db_studentinfo";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
}
else{
    echo "Failed to create database";
}
mysqli_close($conn);
?>