<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form to insert in database</title>
</head>
<body>
    <form action="" method="POST">
        ID:
        <input type="text" name="id">
        <br><br>
        Username:
        <input type="text" name="username">
        <br><br>
        Password:
        <input type="password" name="password">
        <br><br>
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $username = $_POST['username'];
        $password = $_POST['password'];
        if(empty($id)|| empty ($username)||empty($password)){
            echo "Don't leave any field empty";
        }
        else{
            //create connection
            $conn = mysqli_connect('localhost', 'root','','bcathird');
            //check connection

            if(!$conn){
                die("Connection failed: ".mysqli_connect_error());
                
            }
            $sql ="INSERT INTO user(
                id, username, password ) VALUES ('$id', '$username','$password')";
                if(mysqli_query($conn, $sql)){
                    echo "New record inserted in database successfully.";
                }
        }
    }
    ?>
</body>
</html>