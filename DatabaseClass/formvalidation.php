<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form validation</title>
</head>
<body>
    <form action="" method="post">
        <!-- username -->
        Name: <input type="text" name="username"> <br> <br>
        <!-- password -->
        Password: <input type="password" name="password"><br><br>
        <!-- email -->
        E-mail: <input type="text" name="email"><br><br>
        <!-- url -->
        URL: <input type="text" name="url"><br><br>
        <!-- gender -->
        Gender: 
        <input type="radio" name="gender" value="Male"> Male
        <input type="radio" name="gender" value="Female">Female <br><br>
        <!-- faculty -->
        <input type="checkbox" name="faculty[]" value="BIM">BIM <br>
        <input type="checkbox" name="faculty[]" value="BSW">BSW <br>
        <input type="checkbox" name="faculty[]" value="BBA">BBA <br>
        <input type="checkbox" name="faculty[]" value="CSIT">CSIT <br>
        <input type="checkbox" name="faculty[]" value="BBM">BBM <br>
        <input type="checkbox" name="faculty[]" value="BCA">BCA<br>
        <input type="checkbox" name="faculty[]" value="BBS">BBS<br><br>

        <!-- hobbies -->
        <select name="hobbies" id="">
            <option>Select one</option>
            <option value="Games">Games</option>
            <option value="Study">Study</option>
            <option value="Coding">Coding</option>
        </select>
        <!-- submit -->
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    // reading values
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $url = $_POST['url'];
        $hobbies = $_POST['hobbies'];
        // $gender = $_POST['gender'];
        // $faculty = $_POST['faculty[]'];

        // username
        if(empty($username)){
            echo 'Username cannot be empty ';
        }
        else{
            echo "Entered username is ".$username;
        }
        // password
        if(empty($password) || strlen($password)<=8){
            echo "<br>Password must be greater than 8 character. ";
        }
        else{
            echo "<br>Password is $password";
        }
        // email
        if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo " <br>Enter valid email";

        }
        else{
            echo "<br>$email";
        }
        // url
        if(empty($url) || !filter_var($url, FILTER_VALIDATE_URL)){
            echo " <br>Enter valid url";

        }
        else{
            echo "<br>$url"."<br>";
        }

        //this gives an undefined array index 

        // if(empty($gender)){
        //     echo "Choose one gender <br>";
        // }
        // else{
        //     echo "<br>$gender";
        // }

        //we have to use this method to solve the undefined array index
        if(empty($_POST['gender'])){
            echo "<br>Choose one gender <br>";
        }
        else{
            echo $_POST['gender']."<br>";
        }
        //check the faculty whether the faculty is empty or not
        if(empty($_POST['faculty'])){
            echo "<br>PLease select any one faculty<br>";
        }
        else{
            $faculty = $_POST['faculty'];
            //using for loop for reading each values of faculty and display them
            foreach($faculty as $value)
            {
                echo "$value";
                echo "<br>";
            }
        }
        if(!in_array($hobbies, array("Games", "Study", "Coding"))){
            echo "Select one option<br>";
        }
        else{
            echo $hobbies."<br>";
        }
    }
    ?>
</body>
</html>