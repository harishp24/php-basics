<?php

Interface UserDetails {
    public function getName();
    public function getEmail();
}

Interface Employee {
    public function getEmployeeid();
}

class User implements UserDetails, Employee {
    public $name;
    public $email;
    public $empid;

    public function __construct($empid, $name, $email)
    {
        $this->empid = $empid;
        $this->name = $name;
        $this->email = $email;
    }
    public function getEmployeeid(){
        return $this->empid;
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
}

$user = new User("15", "John", "john@gmail.com");
echo $user->getEmployeeid();
echo $user->getName();
echo $user->getEmail();
