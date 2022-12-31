<html>
<head>
    <title>form</title>
</head>
<body>
    <form method="post" action="">
        Name:<input type="text" name="username"><br><br>
        Address:<input type="text" name="adds"><br><br>
        Phone:<input type="number" name="pnum"><br><br>

        <input type="submit" name="submit" value="submit">




    </form>

    <?php
    $NameError = "";
    $AddressError = "";
    $PhoneError = "";
    $success="";

    function validate_input($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $address = $_POST['adds'];
            $phone = $_POST['pnum'];
            


         
        if (empty($username) ) {  
            $NameError = "Enter valid Username";  
                      
        } else {  
            $username = validate_input($_POST["username"]);
          
            if($username == 'sourav') {
                $success= "Thank you ". $username.", ";
                echo $success;
            }
        }  

        if (empty($address) ) {  
            $AddressError = "Enter valid address";  
                      
        } else {  
            $address = validate_input($_POST["adds"]);
          
            if($address == 'jhapa') {
                $success= $address."is correct";
                echo $success;
            }
        }  
         

        if (empty($phone) ) {  
            $NameError = "Enter valid phone number";  
                      
        } else {  
            $phone = validate_input($_POST["pnum"]);
          
            if($phone == '123456789') {
                $success= $phone." is correct";
                echo $success;
            }
        }
        if(empty($success))
            echo "Invalid input!!!";
    }  
       ?>
</body>
</html>