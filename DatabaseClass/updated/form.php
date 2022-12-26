
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
    
    First Number:<input type="number" name="fnum">
    <br>
    <br>
    Second Number: <input type = "number" name="snum">
    <br>
    <br>
    <input type="submit" name="submit">
    </form>



<?php
if(isset($_POST['submit'])){
$firstnum = $_POST['fnum'];
$secondnum = $_POST['snum'];
$sum = $firstnum + $secondnum;
echo"Sum is ".$sum;
}

?>
</body>
</html>

