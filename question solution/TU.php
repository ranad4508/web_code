<?php
$servername = "localhost";
$username ="root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if(!$conn){
    die("Error:".mysqli_connect_error());
}
else{
    echo "Connected<br>";
}
$sql = "CREATE DATABASE TU";
if(mysqli_query($conn, $sql)){
    echo "Database created successfully";
}
else{
    echo "Failed to create database";
}
mysqli_close($conn);

?>