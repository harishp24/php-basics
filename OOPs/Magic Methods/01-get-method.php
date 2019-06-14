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
    public function __get($param){
        if($param == "name"){
            return $this->$param;
        }
        elseif($param == "email"){
            return $this->$param;
        }
        else{
            return "Not Found";
        }
    }
}

$user = new User("Sam", "sam@gmail.com");
echo $user->name;
echo $user->email;
    
