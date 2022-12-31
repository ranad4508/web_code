<?php
$conn = mysqli_connect("localhost", "root", "","TU");
if(!$conn){
    die("Error:".mysqli_connect_error());
}
else{
    echo "Connected<br>";
}
$sql = "INSERT INTO student(id, name, address) VALUES(01,'Dinesh Rana', 'Lalitpur' ),(02, 'Bibek Tamang', 'Baneshwor')";
if(mysqli_query($conn, $sql)){
    echo " Data inserted into table successfully";
}
else{
    echo "Failed to inesert data";
}
mysqli_close($conn);
?>