<?php

$conn = mysqli_connect("localhost","root","","sql_injection");

if($conn){
    echo "Connected";
}