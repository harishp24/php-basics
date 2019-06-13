<?php

class User 
{
    public $name;
    public $email;
    public function getName($name){
        $this->name = $name;
        return $this->name;
    }
    public function getEmail($email){
        $this->email = $email;
        return $this->email;
    }

}

$user = new User;
echo $user->getName("John");
echo $user->getName("john@gmail.com");