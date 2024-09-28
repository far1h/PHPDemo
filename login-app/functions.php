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

function convert_to_date($date){
    return date("F j", strtotime($date));
}