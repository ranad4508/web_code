<?php

$databaseHost = 'localhost';//or localhost, port name
$databaseName = 'bcathird';//uour db_name
$databaseUsername = 'root';
//root by defalut for localhost
$databasePassword = '';//by defalut empty for localhost
$mysqli = mysqli_connect($databaseHost, $databaseUsername, $databasePassword,$databaseName);

?>
