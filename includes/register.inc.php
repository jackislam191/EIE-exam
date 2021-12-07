<?php

if (isset($_POST["submit"])){
        var_dump($_POST);
        $username = $_POST['nickname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $image_upload = $_POST['image'];
        $gender = $_POST['gender'];
        $birthday = $_POST['birth-date'];

    require_once 'db.php';
    require_once 'function.inc.php';

    if (emptyInputSignUp($username, $password, $email, $image_upload, $gender, $birthday) !== false) {
        header("location: ../register.php?error=emptyinput");
        exit();
    }

    if (invalidUserID($username) !== false) {
        header("location: ../register.php?error=invaliduserid");
        exit();
    }

    if (validateEmail($email) !== false) {
        header("location: ../register.php?error=invalidemail");
        exit();
    }

    // if (pwdMatch($email) !== false) {
    //     header("location: ../register.php?error=invalidemail");
    //     exit();
    // }
    if (checkUserExist($conn, $username, $email) !== false) {
        header("location: ../register.php?error=userExisted");
        exit();
    }

    createUser($conn, $username, $password, $email, $image_upload, $gender, $birthday);
}
else {
    header("location: ../register.php");
}