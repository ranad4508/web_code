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
$sql = "DELETE FROM student WHERE id =4";
if(mysqli_query($conn,$sql)){
    echo "Record deleted successfully!";
}
else{
    echo "Error deleting record:";
}

mysqli_close($conn);
?>