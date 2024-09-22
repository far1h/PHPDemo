<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];
    $status = $_POST["status"];

    echo "".$username."<br>".$password."<br>".$status."<br>";
}

// NEVER USE GET DATA WHEN SUBMITTING FORMS TO SERVER
// ALWAYS USE POST DATA FOR SENSITIVE DATA
// GET IN URL POST NOT IN URL