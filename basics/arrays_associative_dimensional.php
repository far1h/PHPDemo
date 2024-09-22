<?php

$products = [
    ["name" =>"Laptop","price"=> 1000,"stock"=> 5],
    ["name" =>"Mouse","price"=> 20,"stock"=> 20],
    ["name" =>"Keyboard","price"=> 40,"stock"=> 30]
];

// echo $products[0]["name"];

foreach ($products as $product) {
    echo "". $product["price"] ." ". $product['name']."<br>";
}