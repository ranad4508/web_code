<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        Name: <input type="text" name="name">
        <br>
        Password: <input type="password" name="password">
        <br>
        Re-type Password: <input type="password" name="retype">
        <br>
        Phone: <input type="number" name="phone">
        <br>
        <br>
        <input type="submit" name="submit">
    </form>



    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $password  = $_POST['password'];
        $retype = $_POST['retype'];
        $phone = $_POST['phone'];

        echo "$name<br></br> $password<br></br> $phone<br></br>";
    }
    ?>
</body>
</html>