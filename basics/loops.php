<?php

// for ($i = 0; $i < 5; $i++) {
//     echo "Number: $i <br>";
// }

// $i = 1;
// // while ($i <= 5) {
// //     echo"Number: $i <br>";
// //     $i++;
// // }

// do {
//     echo "Number: $i <br>";
//     $i++;
// } while ($i <= 5);

$colors = ["red", "green", "blue"];

foreach ($colors as $color) {
    echo "". $color ."<br>";
}

// associative array
$person = ["name" => "Edwin", "age" => 23];

foreach ($person as $key => $value) {
    echo "". $key .": ". $value ."<br>";
}