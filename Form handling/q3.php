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
        Enter value in Fahrenheit: <input type="text" name="fahren"><br>

        <input type="submit" name="submit">
    </form>
</body>
</html>

<?php
if(isset($_POST['submit'])){
    $fahrenheit = $_POST['fahren'];
    $celsius = ($fahrenheit -32)*(5/9);

    echo"$fahrenheit °F = $celsius °C";
}
?>