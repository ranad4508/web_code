<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_studentinfo";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if(!$conn){
    die("Connection failed:");
}
$sql = "SELECT * FROM student";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0){
    echo"<table border = '1px'>";
    while($row = mysqli_fetch_assoc($result)){
        //echo "id" .row["id] ."-Name:".$row["username"].$row["password"].""."<br>";
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "<td>".$row['email']."</td>";
        echo"</tr>";
    }
    echo"</table>";
}
else{
    echo "0 results";
}
mysqli_close($conn);
?>