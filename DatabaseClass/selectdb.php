<?php
$servername = "localhost";
$username="root";
$password ="";
$dbname = "school";
//create connection
$conn = mysqli_connect($servername,$username,$password,$dbname);
//check connection
if(!$conn){
    die("Connection failed:");
}
$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);
//The mysqli_num_rows()function returns the number of rows in a result set.
//mysqpli_num_rows(result);
if(mysqli_num_rows($result)>0){
    //the mysqli_fetch_assoc(result);
    //output data of each row
    echo"<table border = '1px'>";
    while($row = mysqli_fetch_assoc($result)){
        //echo "id" .row["id] ."-Name:".$row["username"].$row["password"].""."<br>";
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['student_name']."</td>";
        echo "<td>".$row['student_password']."</td>";
        echo"</tr>";
    }
    echo"</table>";
}
else{
    echo "0 results";
}
mysqli_close($conn);
?>