<?php

abstract class User {
    abstract function getName();
    abstract function getEmail();
}

class Employee extends User{
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

$user = new Employee("John", "john@gmail.com");
echo $user->getName(); // access Name from method
echo $user->getEmail(); // access Name from method