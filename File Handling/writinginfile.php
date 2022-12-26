<?php
//  write in a file. for write it automatically creates a file by using filename
$filename = "D://phpfile.txt";
$file = fopen($filename, "w");
if($file ==  false){
    echo "Error opening in file";
    exit();
}

fwrite($file, "This is a simple test\n you open and write in a file in php successfully");
fclose($file);
//end of writing in a file


// reading a file that we create named phpfile.txt
$file = fopen($filename, "r");
if($file == false){
    echo "Error opening a file";
    exit();

}
$filesize = filesize($filename);
$filetext = fread($file, $filesize);
fclose($file);

echo "File Size ".$filesize." bytes<br>";
echo "$filetext"."<br>";
echo "File name : ".$filename;
//end of reading a file
?>