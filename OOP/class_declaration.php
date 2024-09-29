<?php

class User {
    public $name;
    public $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function displayUserInfo(){
        echo"User: ".$this->name.", Email:" .$this->email;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }
}

class AdminUser extends User {
    public $role;

    public function __construct($name, $email, $role) {
        parent::__construct($name, $email);
        $this->role = $role;
    }

    public function displayUserInfo(){
        parent::displayUserInfo();
        echo ", Role: ".$this->role;
    }

    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}

$user = new User("mo", "mo@123.com");

$user->displayUserInfo();

echo "<br>";

$admin = new AdminUser("admin","admin@123.com","Admin");

$admin->displayUserInfo();

echo "<br>";