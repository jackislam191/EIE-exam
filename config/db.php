<?php
    ob_start();

    if (!isset($_SESSION)){
        session_start();
    }

    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname = "eie4432";

    if (!$con = mysqli_connect($hostname, $username, $password, $dbname)) {
        die("Database connection not established.");
    }
