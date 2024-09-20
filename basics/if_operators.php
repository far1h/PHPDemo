<?php

// Comparison Operators
// == : Equal to
// != or < : Not equal to 
// ===: Identical (equal and of the same type)
// !== : Not identical (either not egual or not of the same type)
// > : Greater than
// < : Less than
// >= : Greater than or equal to 
// <= : Less than or equal to

$x = "2";
$y = 2;

// if ($x === $y) {
//     echo "IT IS";
// }

// 2. Logical Operators
// && : Logical AND (both conditions must be true)
// || : Logical OR (at least one condition must be true)
// !: Logical NOT (negates the condition)

$age = 25;
$hasID = true;
$hasPermission = true;
$isMember = true;
$hasDiscount = false;

if($hasPermission || $age >=18){
echo"You are allowed";
} else {
echo"Access Denied";
}

if(!$isMember){
    echo "You need to sign up";
} else {
    echo "Welcome back";
}

if ($age >= 18 && ($isMember || $hasDiscount)){
    echo "You are elegible for discount";
} else {
    echo "No discount available";
}