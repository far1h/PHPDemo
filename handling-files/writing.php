<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$file_name = "data.txt";

$file = fopen($file_name,"w");
// $file = fopen($file_name,"a");


var_dump($file);

if ($file) {
    fwrite($file,"HELLO I am a new paragraph\n");
    fclose($file);
    echo "File written successfully";
} else {
    echo "Unable to write to file";
}
?>