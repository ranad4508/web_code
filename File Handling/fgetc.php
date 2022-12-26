<?php
//fgetc is used for reading a single character
$file = fopen("D://phpfile.txt","r");
echo fgetc($file)."<br>";

?>