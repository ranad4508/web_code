<?php
$file = "D://phpfile.txt";
if(file_exists($file)){
    if(rename($file, "newfilephp.txt")){
        echo "File renamed successfully<br>";
    }
    else{
        echo "Failed to rename";
    }
}
else{
    echo "File doesn't exists<br>";
}
echo "Your file name is ".$file;
?>