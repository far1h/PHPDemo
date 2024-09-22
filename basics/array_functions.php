<?php

$fruits = ["Apple", "Banana", "Orange"];
$veggies = ["Carrot", "Plantain", "Lettuce"];

array_push($fruits,"MANGO");
array_pop($fruits);

echo count($fruits) . "<br>";

$merged = array_merge($fruits, $veggies);

print_r($merged) ;
echo "<br>";

if(in_array("Banana", $merged)){
    echo "Banana is in the array" . "<br>";
}

$numbers = [1,4,5,9,2];

sort( $numbers );

print_r($numbers);

echo "<br>";

$person = ["name"=> "mo", "age" => 20, "city" => "monaco"];

ksort($person);

print_r($person);

echo "<br>";

$sliced = array_slice($fruits, 1, 2);

print_r( $sliced );
