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
    final public function getEmail(){
        return $this->email;
    }
}

class Employee extends User {
    public function __construct($name, $email)
    {
        parent::__construct($name, $email);
    }
    public function getName(){
        return $this->name;
    }
    /*Below block will throw error if we uncomment it because final methods can't be implemented */
    // public function getEmail(){
    //     return $this->email;
    // }
}

$user = new User("John", "john@gmail.com");
echo $user->getName();
echo $user->getEmail(); // Will throw error if getEmail method is implemeted