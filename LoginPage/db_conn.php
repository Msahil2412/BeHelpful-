<?php
$suname = "localhost";
$uname = "root";
$password="";
$db_name="";
$conn= mysqli_connect($suname,$uname,$password,$db_name);
if(!$conn){
    echo "connection failed;
}
?>