<?php


$conn = mysqli_connect("localhost","root","","prepare_stmt_db");

$query = mysqli_prepare($conn, "INSERT INTO users(username, email, password, reg_date) VALUES(?, ?, ?, ?)");

if ($query) {
    $username = "Mo_kazi";
    $email = "mo@123.com";
    $password = "123";
    $reg_date = date("Y-m-d H:i:s");

mysqli_stmt_bind_param($query, "ssss", $username, $email, $password, $reg_date);

mysqli_stmt_execute($query);

echo "New user created successfully";

mysqli_stmt_close($query);

} else {
    echo "Error:" . mysqli_error($conn);
}
