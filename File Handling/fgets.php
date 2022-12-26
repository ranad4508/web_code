 <?php
$filename = "D://phpfile.txt";
$file = fopen($filename, "r");
echo fgets($file)."<br><br>";//reads a single line
fclose($file);
?>

<?php
//fgets is used for reading a single line, for reading a whole line we have to use a loop and feof method
$file = fopen("D://phpfile.txt", "r");
while(!feof($file)){
    echo fgets($file)."<br/>";
}
fclose($file);
?>