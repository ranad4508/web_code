<?php
session_start();
if(isset($_SESSION['counter'])){
    $_SESSION['counter']+=1;
}
else{
    $_SESSION['counter'] = 1;
}
echo 'you have visited this page '.$_SESSION['counter'].' in this session.';
?>