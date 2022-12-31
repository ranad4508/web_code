<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        Name: <input type="text" name="name">
        Phone non. <input type="number" name="phone">
        <input type="submit" vlaue="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $reg = "/^[a-zA-Z ]+$/";
        if(preg_match($reg, $name)){
            echo $name;
        }
        else{
            echo "Only alphbets are allowed";
        }
        $reg1 = "/^[0-9]{10}$/";
        if(preg_match($reg1, $phone)){
            echo $phone;
        } 
        else{
            echo "Only numbers are allowed";
        }
    }
    ?>
</body>
</html>