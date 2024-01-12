<?php
include("connection.php");


?>

<!DOCTYPE html>

<htm
l lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-compatible "content= IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale 1.0">
    <title>DOCUMENT</title>
    <link rel="stylesheet"  href="style.css">
</head>
<body>

        <div id="form">
    <h1>Login form</h1>
    <form name="form"action="login.php"onsubmit="return isvalid()" method="POST">
    <label>Username:</label>
    <input type="text" id="user"name="user"><br><br>
    <label>Password</label>
    <input type="password" id="pass"name="pass"><br><br>
    <input type="submit" id="btn"value="login" name="submit"><br><br>
    <span class="sign">Don't have an account?</span><a class="signup"href="signup.php">sign up</a>
    <div class="signup">
</form>

</div>

<script>
      function isvalid(){
        var user =document.form.user.value;
        var pass=document.form.pass.value;
        if(user.length=="" && pass.length==""){
          alert("username and password field is empty!!!");
          return false
        }
        else{
          if(user.length==""){
            alert("username is empty!!!");
            return false
          }
          if(pass.length==""){
            alert("password is empty!!!");
            return false
        }
        }
      }
    </script>
    


  
</body>
</html>





gggbg