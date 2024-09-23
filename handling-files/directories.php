<?php

$directory = "uploads";

// Creating directory
if(!file_exists($directory)){  
    mkdir($directory,0777, true);
    echo "Directory created";
} else {
    echo "Directory already exists";
}