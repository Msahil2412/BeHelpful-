<?php
session_start();
include "db_conn.php";
if(isset($_POSt['uname']) && isset($_POST['password'])){

    function validate($data){
        $data = validate($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;

        
    }
}
$uname = validate($_POST['uname']);
$pass = validate($_POSt['password']);
if(empty($uname)){
    header ("Location: index.php?error=user name is required");
    exit();

}
else if(empty($pass)){
    header("Location: index.php?error=password is required");
    exit();
}

$sql = "SELECT * FROM users WHERE user_name '$uname' AND password='$pass'";
$result = mysqli_fetch_assoc($result);
if($row['user_name']===$uname && $row['password']===$pass){
    echo "Logged";
    $_SESSION['user_name']= $row['user_name'];
    $_SESSION['name']= $row['name'];
    $_SESSION['id']=$row['id'];
    header("Location: home.php");
    exit();
}

else{
    header("Location: index.php?error=Incorrect user name or password");
    exit();
}
else{
    header("Location:index.php");
    exit();
}