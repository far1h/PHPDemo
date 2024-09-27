<?php

function is_logged_in(){
    return isset($_SESSION["logged_in"]) && $_SESSION["logged_in"] === true;
}

function redirect($location){
    header("Location: ".$location);
    exit;
}

function setActiveClass($pageName) {
    $current_page = basename($_SERVER['PHP_SELF']);
    return $current_page === $pageName ? "active" : "";
}

function getPageClass(){
    return basename(path: $_SERVER['PHP_SELF'], suffix: ".php");
}

function user_exists($conn, $username) {
    $query = "SELECT * FROM users WHERE username = '$username' LIMIT 1";
    $result = mysqli_query($conn, $query);

    return mysqli_num_rows($result) > 0;
}