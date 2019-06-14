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
    public function __call($func, $args){
       echo "Function: {$func} Not found";
    }
    public function getName(){
        return $this->name;
    }
}

$user = new User("Sam", "sam@gmail.com");
echo $user->getEmail();
