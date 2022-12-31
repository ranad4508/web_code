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
        First Name: <input type="text" name="fname"><br><br>
        Last Name: <input type="text" name="lname"><br><br>
        Phone Number: <input type="text" name="phone"><br><br>
        Education: <input type="text" name="education"><br><br>
        Gender: <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female"> Female
        <br><br>
        Message:
        <textarea name="message" id="" cols="30" rows="10"></textarea>
        <input type="submit" name="submit" value="submit"/>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $phone = $_POST['phone'];
        $education = $_POST['education'];
        $gender = $_POST['gender'];
        $message = $_POST['message'];
        echo ("$firstname<br>$lastname<br> $phone<br>$education<br>$gender<br>$message ");
    }
    ?>
</body>
</html>