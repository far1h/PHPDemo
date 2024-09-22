<?php

$person = [
    "name" => "Mo",
    "age" => "30",
    "city"=> "Tangerang",
];

// echo $person['name'];

$person ['profession'] = 'student';

foreach($person as $key => $value) {
    echo $person[$key] . "<br>";
}