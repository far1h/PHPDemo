<?php

function isEven($number){
    return $number %2== 0;
}

$number = 10;

if (isEven($number)){
    echo"the number $number is even";
}else{
    echo "the number $number is NOT even";
}