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


function user_exists($conn, $username) {
    $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    return mysqli_num_rows($result) > 0;
}

function create_user($conn, $username, $email, $password){
    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $query = "INSERT INTO users (username, password, email) VALUES ('$username','$passwordHash','$email')";
    return mysqli_query($conn, $query);
}

function update_user($conn, $user_id, $new_username, $new_email){
    $query = "UPDATE users SET email = '$new_email', username = '$new_username' WHERE id = $user_id";
    return mysqli_query($conn, $query);
}

function delete_user($conn, $user_id){
    $query = "DELETE FROM users WHERE id = $user_id";
    return mysqli_query($conn, $query);
}