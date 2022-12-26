<?php
//error handler function
function CustomError($errno, $errstr){
    echo"<b>Error: You are fool!!! Baka!!!!</b> [$errno] $errstr";
}
//set error handler
set_error_handler("CustomError");
//trigger error
echo($test);
?>