<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4</title>
</head>
<body>
    <form action="" method="POST">
        Number 1: <input type="number" name="num1"><br>
        Number 2: <input type="number" name="num2"><br>

        Operations:<br>
        <input type="radio" name="operation" value="1">Addition
        <input type="radio" name="operation" value="2">Subtraction
        <input type="radio" name="operation" value="3">Multiplication
        <input type="radio" name="operation" value="4">Division
        <input type="radio" name="operation" value="5">Average <br>

        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['operation'];
   
    // $add = $_POST[1];
    // $sub = $_POST[2];
    // $mul = $_POST[3];
    // $div = $_POST[4];
    // $avg = $_POST[5];

    switch($op){
        case "1":
            echo"$num1 + $num2 = ".$num1+$num2;
            break;
        case "2":
            echo"$num1 - $num2 = ".$num1-$num2;
            break;
        case "3":
            echo"$num1 * $num2 = ".$num1*$num2;
            break;
        case "4":
            echo"$num1 / $num2 = ".$num1/$num2;
            break;
        case "5":
            echo"($num1 + $num2)/2 = ".($num1+$num2)/2;
            break;
        default:
        echo"Invalid option";
    }
}
?>