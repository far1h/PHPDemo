<?php

class User {
    public static $userCount = 0;

    public function __construct() {
        self::$userCount++;
    }
    public static function getUserCount() {
        return "Total users: " . self::$userCount;
    }
}

$user = new User();
$user = new User();
$user = new User();
$user = new User();

echo User::getUserCount();