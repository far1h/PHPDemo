<?php

function greet($name){
    echo "Hello, {$name} welcome to PHP" . "<br>";
}


greet("Alice");

function calculateRectangleArea($width, $height){
    return $width * $height;
}

echo calculateRectangleArea(10,5) . "<br>";

$areaRectangle = calculateRectangleArea(10,5);

echo 34 + $areaRectangle . "<br>";

function calculateSum($a, $b){
    return $a + $b;
}

$sum = calculateSum(5, 10);

echo "the sum is: $sum";