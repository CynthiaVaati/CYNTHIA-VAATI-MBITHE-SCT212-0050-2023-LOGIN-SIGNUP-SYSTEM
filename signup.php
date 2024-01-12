<?php
session_start();
include("connection.php");
include("functions.php");

if(($_SERVER['REQUEST_METHOD'])=="POST")
{
    //something was posted
   $username= $_POST['user'];
   $password=$_POST['Pass'];
   $email=$_POST['email'];
   if(!empty($username) && !empty($password) &&!empty($email) && !is_numeric($username))
   {
//save to database
$user_id= random_num(20);
$query ="insert into users ( user_id,user_name, password,email) values( '$user_id','$username', '$password','$email')";
mysqli_query($connection, $query);
header("Location:index.php");
   }else
   {
    echo "Please enter some valid information!";
   }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GIRLY SPACE</title>
    <link rel="stylesheet"type="text/css"href="Style.css">
</head>
<body>
    <div id="form2">
        <h1>SIGN UP</h1>
        <form name="signup_form"action="Signup.php"onsubmit="return isvalid()"method="POST">
            <label>username: </label>
            <input type="text" id="user" name="user"><br></br>
            <label>Password: </label>
            <input type="password" id="Pass" name="Pass"><br></br>
            <label>Email: </label>
            <input type="text" id="email" name="email"><br></br>
            <input type="submit"id="button"value="Sign Up"name="submit"/><br></br>
            <form name="signup_form" action="Signup.php" onsubmit="return isvalid()" method="POST">
    


        </form>
    </div>
       
</body>
</html>
        
