<?php
session_start()?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <?php
    $_SESSION["username"]="Bibek";
    $_SESSION["address"]="Otaku";
    echo"PHP session variables are set<br>";
    echo  $_SESSION["username"],"<br>".$_SESSION["address"];
    ?>
</body>
</html>