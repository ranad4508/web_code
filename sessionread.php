<?php
session_start();
echo  $_SESSION["username"]."<br>".$_SESSION["address"];
?>