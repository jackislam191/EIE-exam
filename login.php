<?php 

include_once('header.php');

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
        <?php
            if (isset($_GET['error'])) {
                if ($_GET['error'] == 'emptyInput') {
                    echo "<h1>Please fill in all the fields!</h1>";
                }
                else if ($_GET['error'] == 'wrongusername') {
                    echo "<h1>Please type the correct username!</h1>";
                }
                else if ($_GET['error'] == 'wrongpassword') {
                    echo "<h1>Please type the correct password!</h1>";
                }
            }
        ?>
            <form action="includes/login.inc.php" method="POST">
                <label>Username</label>
                <input type="text" name="username">
                <br>

                <label>Password</label>
                <input type="password" name="password">

                <br>
                <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-block">
                        Login 
                </button>

                <a href="register.php" >
                    <!-- <button> -->
                        Sign Up
                    <!-- </button> -->
                </a>
            </form>
    </div>
</body>
</html>