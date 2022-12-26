<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
</head>
<body>
    <form action="" method="POST">
        First Name: 
        <input type="text" name="fname">
        <br><br>
        Last Name: 
        <input type="text" name="lname">
        <br><br>
        phone: 
        <input type="number" name="ph_no">
        <br><br>
        Education: 
        <select name="education" id="">
            <option value="undeucated">Uneducated</option>
            <option value="slc">SLC</option>
            <option value="plus_two">+2</option>
            <option value="bachelor">Bachelor</option>
        </select>
        <br><br>
        Gender: 
        <input type="radio" name="gender">Male
        <input type="radio" name="gender">Female
        <br><br>
        <textarea name="text" id="" cols="30" rows="5"></textarea>
        <br><br>
        <input type="checkbox" name="terms">I accept terms and condition
        <br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $firstname = $_POST['fname'];
        $lasttname = $_POST['lname'];
        $phone = $_POST['ph_no'];
        $education = $_POST['education'];
        $gender = $_POST['gender'];
        $textarea = $_POST['text'];
        echo $_POST['fname'];
        echo $_POST['lname']."<br>";
        echo $_POST['ph_no']."<br>";
        echo $_POST['education']."<br>";
        echo $_POST['gender']."<br>";
        echo $_POST['text']."<br>";
    }
    ?>
</body>
</html>