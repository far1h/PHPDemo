<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = htmlspecialchars(trim($_POST["username"]));
    $password = htmlspecialchars(trim($_POST["password"]));

    if(!empty($username) && !empty($password)){
        echo "Name: ".$username."<br>Password: ".$password."<br>";
    } else {
        echo"Fill in all fields <br>";
    }
}

// NEVER USE GET DATA WHEN SUBMITTING FORMS TO SERVER
// ALWAYS USE POST DATA FOR SENSITIVE DATA
// GET IN URL POST NOT IN URL