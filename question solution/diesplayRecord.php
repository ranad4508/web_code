<?php
$conn = mysqli_connect("localhost", "root", "","TU");
if(!$conn){
    die("Error:".mysqli_connect_error());
}
else{
    echo "Connected<br>";
}
$sql = "SELECT * from student ";
$result = mysqli_query($conn, $sql);
if(mysqli_num_rows($result)>0){
    echo "<table border='1px'>";
    while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['name']."</td>";
        echo "<td>".$row['address']."</td>";
        echo "</tr>";
    }
    echo "</table>";
}
else{
    echo "0 results";
}
mysqli_close($conn);
?>