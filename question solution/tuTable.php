<?php
$conn = mysqli_connect("localhost", "root", "","TU");
if(!$conn){
    die("Error:".mysqli_connect_error());
}
else{
    echo "Connected<br>";
}
$sql = "CREATE TABLE student(
    id INT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    address VARCHAR(30) NOT NULL
)";
if(mysqli_query($conn, $sql)){
    echo "Table created successfully";

}
else{
    echo " Failed to create table";
}
mysqli_close($conn);
?>