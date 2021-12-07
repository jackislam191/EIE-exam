<?php

function check_login($con) {
    if(isset($_SESSION['customer_id'])) {
        $id = $_SESSION['customer_id'];
        $sql = "select * from customers where customer_id = '$id' ";
        
        $result = mysqli_query($con, $query);

        if ($result && mysqli_num_rows($result) > 0 ) {
            $user_data = mysqli_fetch_assoc($result);

            return $user_data;
        }

    }   

    header("location: login.php");

    die;
}