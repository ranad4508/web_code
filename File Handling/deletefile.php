<?php
$file = "filephp.txt";
//unlink($file)
if(!unlink($file)){
    echo("Error deleting $file");
}
else{
echo ("Deleted $file");
}
?>