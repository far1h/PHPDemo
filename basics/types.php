<?php

$a = (string) 5; // Integer
$b = (string) 5.5; // float
$c = (int) "five"; // string
$d = (string) false; // boolean
$e = (object) ["name"=> "Edwin"]; // array
$f = (string) NULL; // NULL

// var_dump($a);
// echo "<br>";
// var_dump ($b);
// echo "<br>";
// var_dump ($c);
// echo "<br>";
// var_dump ($d);
// echo "<br>";

echo $e->name;

$e = ["name"=> "Edwin"]; // array

echo $e["name"];
