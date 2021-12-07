<?php

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    require_once 'db.php';
    require_once 'function.inc.php';

    if (emptyLoginInput($username, $password) !== false) {
        header("location: ../login.php?error=emptyInput");
        exit();
    }

    loginUser($conn, $username, $password);
    }
    else {
        header("location: ../login.php");
        exit();
    }
