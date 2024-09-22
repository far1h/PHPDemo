<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usernameErr = $emailErr = "";
    $username = $email = "";

    if(empty($_POST["username"]) || empty($_POST["email"])){
        $usernameErr = "username is required";
        $emailErr = "email is required";
    } else {
        $username = htmlspecialchars(trim($_POST["username"]));
        $email = htmlspecialchars(trim($_POST["email"]));

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $emailErr = "Invalid email format";
        }
    }
}

echo $usernameErr;

echo $username;

