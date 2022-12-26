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
        First Name: <input type="text" name= "id"><br>
        <br>
        Last Name: <input type="text" name="name"><br>
        <br>
        Password: <input type="password" name="password"><br>
        <br>
        Education: <select name="Education">
            <option value="Uneducated">Uneducated</option>
            <option value="SLC">SLC</option>
            <option value="+2">+2</option>
            <option value="Bachelor">Bachelor</option>
        </select><br>
        <br>
        Gender: <input type="radio" name="Gender" value="M" >Male <input type="radio" name="Gender" value="F">Female <br>
        <br>
        <textarea name="textarea" value="Text Here" id="" cols="30" rows="10"></textarea><br>
        <br>
        <input type="checkbox" name="checkbox"> I accept the terms and condition <br>
        <br>
        <input type="submit" value="Submit" name="Submit"><br>
    </form>

    <?php
    if(isset($_POST['Submit'])){
        $firstname = $_POST['id'];
        $lastname = $_POST['name'];
        $password = $_POST['password'];
        $education = $_POST['Education'];
        $gender = $_POST['Gender'];

        echo "$firstname <br></br> $lastname <br></br> $password <br></br>" ;
    }
    ?>
    
    
</body>
</html>