<?php

// $file_name = "data.txt";

// $file = fopen($file_name,"r");

// // var_dump($file);

// if ($file) {
//     $content = fread($file, filesize($file_name));
//     echo nl2br($content);
//     fclose($file);
// } else {
//     echo "Unable to open file";
// }

// just to echo content
$content = file_get_contents("data.txt");
echo nl2br($content);