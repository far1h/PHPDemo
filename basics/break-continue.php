<?php

for ($i = 0; $i < 5; $i++) {
    if($i == 3) {
        break;
    }   
    echo "$i <br>";
}

for ($i = 0; $i < 5; $i++) {
    if($i == 3) {
        continue;
    }   
    echo "$i <br>";
}