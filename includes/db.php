<?php

    $hostName = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "eie4432";

    $conn = mysqli_connect($hostName, $dbUsername, $dbPassword, $dbname);

    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }
    