<?php

class User 
{
    private $name;
    private $email;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }
    private function getName(){
        return $this->name;
    }
    private function getEmail(){
        return $this->email;
    }

    public function getUserDetails(){
        return "User Name is {$this->getName()} and Email is {$this->getEmail()}";
    }
}

$user = new User("John", "john@gmail.com");
echo $user->getUserDetails();