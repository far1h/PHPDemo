<?php

class User {

    private $username;
    
    
    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }
}

$user = new User();

$user->setUsername("Nigga");
echo $user->getUsername();