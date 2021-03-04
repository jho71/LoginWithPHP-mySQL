<?php
session_start();
include("connection.php");
include("functions.php");

$user_data = check_login($con);


?>
<!DOCTYPE html>

<html>
<head>
    <title> Login app </title>
</head>
<body>
    <a href="logout.php">Logout</a>
    <h1>This is main page! you've logged in</h1>
    <br>
    Hello <?php echo $user_data['user_name'];?>
    </body>
</html>
