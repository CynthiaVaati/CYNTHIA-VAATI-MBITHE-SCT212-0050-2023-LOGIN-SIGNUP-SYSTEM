<?php

$servername="localhost";
$username="root";
$password= "";
$db_name="login sample.db";

$connection=mysqli_connect($servername,$username,$password,$db_name,3306);
if($connection ->connect_error){

    die("connection failed!".$connection->connect_error);
}
echo"";
?>









