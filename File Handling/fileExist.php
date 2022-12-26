<?php
$file = "D://phpfile.txt";
if(file_exists($file)){
    echo "Your file exists in the System";
}
else{
    echo "File doesn't exists in the System.<br> Please make file first and try again";
}

?>