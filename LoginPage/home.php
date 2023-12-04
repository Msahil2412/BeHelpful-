<?php
session_start():
if(isset($_SESSION['id']) && ($_SESSION['user_name'])){
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <h1>Hello,<?php echo $_SESSION['usee_name'];?>
        <a href="Logout.php">Logout</a>

    </body>
    </html>
    <?php

}
else{
    header("Location: index.php");
    exit();
}
?>