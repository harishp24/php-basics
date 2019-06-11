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
}

$user = new User("John", "john@gmail.com");
echo $user->name; // directly access Name
echo $user->email; // directly access Email
echo $user->getName(); // access Name from method
echo $user->getEmail(); // access Name from method