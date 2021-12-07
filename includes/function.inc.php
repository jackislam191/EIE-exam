<?php


    function emptyInputSignUp($username, $password, $email, $image_upload, $gender, $birthday) {
        $result = null;
        if  (!empty($username) && !empty($password) && !empty($email) && !empty($image_upload) && !empty($gender) && !empty($birthday) ) {
            $result = true;
        }
        else {
            $result = false;
        }

        return $result;
    }

    //use the regular expression check any invalid character for username
    function invalidUserID($username) {
        $result = null;
        if (preg_match("/^[a-zA-Z0-9]*$/"), $username) {
            $result = true;
        }
        else {
            $result = false;
        }
        return $result;
    }

    function validateEmail($email) {
        $result = null;
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $result = true;
        }
        else {
            $result = false;
        }

        return $result;
    }

    function checkUserExist($username, $email){
        $sql = "SELECT * FROM customers WHERE nickname = ? OR email = ?;";
        $stmt = mysqli_stmt_init($conn);

        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../register.php?error=sqlStmtError");
            exit();
        }

        mysqli_stmt_bind_param($stmt, "ss", $username, $email);
        mysqli_stmt_execute($stmt);

        $result_data = mysqli_stmt_get_result($stmt);

        if($row = mysqli_fetch_assoc($result_data)) {
            return $row;
        } else {
            $result = false;
            return $result;
        }

        mysqli_stmt_close($stmt);
    }

    function createUser($conn)