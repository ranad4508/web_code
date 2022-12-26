<?php
//reading an existing file. first we have to create a file and then read it.
$filename = 'D://filewriter.txt';
$file = fopen($filename, "r");
if($file == false){
    echo "Error in opening a file";
    exit();
}
$filesize = filesize($filename);
$filetext = fread($file, $filesize);
echo "File Size ".$filesize." bytes<br>";
echo $filetext;
//end reading a file
?>