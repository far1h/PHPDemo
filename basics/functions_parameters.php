<?php

function greet($name){
    echo "Hello, {$name} welcome to PHP" . "<br>";
}


greet("Alice");

function calculateRectangleArea($width, $height){
    echo  $width * $height;
}

calculateRectangleArea(10,5);