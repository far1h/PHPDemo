<?php

class User {

    public function create() {
        return "creating users";
    }
}

$user = new User();
echo $user->create();

