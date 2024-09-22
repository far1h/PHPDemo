<?php 

function greetUserWithTime($name, $greeting = "Good Morning"){
    echo"".$name.", ".$greeting."<br>";
}

greetUserWithTime("Alice");

greetUserWithTime("Bob", "Good Evening");