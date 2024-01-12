<?php

function check_login ($connection){

if(isset($_SESSION['user_id']))
{
    $id= $_SESSION['user_id'];
    $query="select*from users where user_id='$id' limit 1";
    $result=mysqli_query($connection,$query);
    if( $result && mysqli_num_rows($result)>0)
{
    $User_data=mysqli_fetch_assoc($result);
    return $User_data;

}

}
//redirect to login
header("location:login.php");
die;
}
function random_num($length)
{
    $text="";
    if($length<5)
    {
        $length=5;
    }
    $length=rand(4,$length);
    for($i=0; $i<$length;$i++);{
        #code...
        $text .=rand(0,9);
    }
    return $text;
}
    


