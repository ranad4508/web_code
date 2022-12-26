<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school";

$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
    die("Connection established.");
}
//update database
// $sql = "UPDATE student SET student_password = '@abcd' WHERE id =1";
// if(mysqli_query($conn,$sql)){
//     echo "Record updated successfully!";
// }
// else{
//     echo "Error updating record:";
// }
$sql ="DELETE FROM student WHERE id =3";
if(mysqli_query($conn,$sql)){
    echo'Deleted successfully.';
}
else{
    echo'Baka!!!';
}
mysqli_close($conn);
?>