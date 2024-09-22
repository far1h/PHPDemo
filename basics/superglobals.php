<?php

// $GLOBALS
// $_SERVER
// $_POST
// $_GET
// $_COOKIE
// $_FILES

// $app = "PHP CMS";
// $app2 = "JS CMS";

// function exampleFunction(){
//     echo $GLOBALS['app'];
// }

// GET STUFF FROM THE URL
// .../superglobals.php/?name=mo&age=19
$name = $_GET["name"];
$age = $_GET["age"];
$status = $_GET["status"];

echo"".$name."<br>".$age."<br>".$status."<br>";

echo $_SERVER["SERVER_NAME"] . "<br>";
echo $_SERVER["PHP_SELF"] . "<br>";
echo $_SERVER["HTTP_USER_AGENT"] . "<br>";