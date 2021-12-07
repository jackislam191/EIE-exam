<?php 

include_once('header.php');

session_start();
    include("./config/db.php");
    $user_data = check_login($con);
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page</title>
</head>
<body>
    <div id="box">
            <form method="POST">
                <label>Username</label>
                <input type="text" name="username">

                <br>

                <label>Password</label>
                <input type="password" name="password">

                <br>
                <input type="submit" value="login">

                <a href="register.php" >
                    <!-- <button> -->
                        Sign Up
                    <!-- </button> -->
                </a>
            </form>
    </div>
</body>
</html>