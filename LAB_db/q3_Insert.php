<?php
// $servername = "localhost";
// $username  ="root";
// $password  = "";
// //Create connection
// $conn = mysqli_connect($servername,$username,$password);
// //Check connection
// if(!$conn){
//     die ("Connection failed:".mysqli_connect_error());
// }
// else
// {
//     echo"Connected<br>";
// }
// if(mysqli_select_db($conn,'db_studentinfo')){
//     echo"database selected<br>";#check database
// }
// $mysql = "INSERT INTO student(id, name, address, email) VALUES(1, 'Dinesh', 'Tikathali', 'ranad4508@gmail.com'),
// (2, 'Jyoti', 'Koteshwor', 'roshni@gmail.com'),
// (4, 'Bibek', 'Baneshwor', 'bibek@gmail.com'),
// (5, 'Smriti', 'Bhaktapur', 'smriti@gmail.com')";
// if(mysqli_query($conn, $mysql)){
//     echo "Inserted into table successfully<br>";
// }
// else{
//     echo "Failed to insert<br>";
// }
// mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<form action="" method="POST">
	ID:<input type="integer" name="id"><br><br>
	Name:<input type="text" name="name"><br><br>
	Address: <input type="text" name="address"><br><br>
	Email: <input type="email" name="email">
	<input type="submit" name="submit">
</form>

<?php
    if(isset($_POST['submit'])){
        $id = $_POST['id'];
        $studentname = $_POST['name'];
        $Address= $_POST['address'];
        $Email=$_POST['email'];

        if(empty($id)|| empty ($studentname)||empty($Address)||empty($Email)){
            echo "Don't leave any field empty";
        }
        else{
            //create connection
            $conn = mysqli_connect('localhost', 'root','','db_studentinfo');
            //check connection

            if(!$conn){
                die("Connection failed: ".mysqli_connect_error());
                
            }
            $sql ="INSERT INTO Student(
                id, name, address,Email ) VALUES ('$id', '$studentname','$Address','$Email')";
                if(mysqli_query($conn, $sql)){
                    echo "New record inserted in database successfully.";
                }
        }
    }
    ?>
</body>
</html>