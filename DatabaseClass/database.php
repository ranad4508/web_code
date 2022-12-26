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
    echo"Connected";
}

if(mysqli_select_db($conn,'bcathird')){
    echo" You Baka!!!";#check database
}

$sql = "CREATE TABLE user(
    id INT PRIMARY KEY,
    username VARCHAR(30) NOT NULL,
    password VARCHAR(30) NOT NULL
)";
if(mysqli_query($conn,$sql)){
    echo'Table user created successfully. ';
}else
{
    echo'Dattebayo!!!';
}
mysqli_close($conn);

// create datdabase
// $sql = "CREATE DATABASE bcathird";
// if(mysqli_query($conn,$sql)){
//     echo "Database created successfully";
// }else{
//     echo "Error creating database.";
// }
// mysqli_close($conn);

// $sql2 = "CREATE DATABASE onepiece";
// if(mysqli_query($conn,$sql2)){
//     echo"You BAKA!!!";
// }
// else{
//     echo"Simaaaa!";
// }
// mysqli_close($conn);
?>