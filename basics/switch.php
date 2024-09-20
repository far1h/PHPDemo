<?php

$day = "Monday";
$message = "Today is ";

switch ($day) {
    case "Monday": 
        // echo"Today is Monday";
        echo"{$message} $day";
        break;
        case "Tuesday": 
            // echo"Today is Tuesday";
            echo"{$message} $day";
        break;
    default:
    echo "Invalid day";
    break;
    }