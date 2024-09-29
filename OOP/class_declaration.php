<?php

class User {

    private $username;

    public function __construct($username) {
        $this->username = $username;
    }
    
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
}

$user = new User("mamamia");
echo $user->getUsername();