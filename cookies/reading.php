<?php

if(isset($_COOKIE['usernamer'])){
   echo "Hello " . $_COOKIE['username'] ; 
} else {
    echo 'Hello guest';
}