<?php

$old_name = "data.txt";
$new_name = "new_data.txt";

if(file_exists($old_name)){
    rename($old_name, $new_name);
    echo "File renamed";
} else {
    echo "File not found";
}

