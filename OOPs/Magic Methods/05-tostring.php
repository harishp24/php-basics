<?php

class User 
{
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }

    public function __toString(){
        return "Name of User: {$this->name} and email: {$this->email}";
    }
}

$user = new User("John", "john@gmail.com");
echo $user;