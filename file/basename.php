<?php
$path = "/file/basename.php";
//show filename with file extension
echo basename($path)."<br>";
echo basename($path, ".php");


?>
<?php
echo "<br><b>";
print_r(pathinfo("/file/abc.txt"));
echo "</b>"
?>