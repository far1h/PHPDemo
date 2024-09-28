<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "login_app";

$conn = mysqli_connect($host, $username, $password, $dbname);

if(!$conn){
    die("Connection failed". mysqli_connect_error());
} else {
    // echo "Not connected" . mysqli_error($conn);
    // echo "Connected";
}

function check_query($result){
    global $conn;
    if(!$result){
        return "Error" . mysqli_error($conn);
    }

    return true;
}