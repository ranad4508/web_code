<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_studentinfo";

$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
    die("Connection established.");
}
//update database
$sql = "UPDATE student SET name = 'Shiva Thapa' WHERE id =5";
if(mysqli_query($conn,$sql)){
    echo "Record updated successfully!";
}
else{
    echo "Error updating record:";
}

mysqli_close($conn);
?>