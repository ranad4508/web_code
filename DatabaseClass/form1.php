<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="" method="post">
        Username:- <input type="text" name="username"> <br><br>
        Password:- <input type="password" name="password"> <br><br>
        <input type="checkbox" name="remember">Remember <br><br>
        <input type="submit" value="Login" name="submit">
    </form>
</body>
</html>
<?php
include("config.php");

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sqlquery = "select * from user where username = '$username' and password = '$password'";

    $res = mysqli_query($mysqli, $sqlquery);
    $numRows = mysqli_num_rows($res);
    if($numRows == 1){
        //store data into session
        $_SESSION['username'] = $username;
        //check remember me button
        if(isset($_POST['remember'])){
            //store cookie
            setcookie('username', $username, time()+30*24*60*60);
        }
        echo $username.' is logged in successfully';
        header('location:login.php');
        
    }
    else{
        echo 'Login failed! Please try again';
    }
    
}
?>