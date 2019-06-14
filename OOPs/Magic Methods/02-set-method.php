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
    public function __set($param, $value){
        if($param == "name"){
            $this->$param = $value;
        }
        elseif($param == "email"){
            $this->$param =  $value;
        }
        else{
            return "Not Found";
        }
    }
    public function getName(){
        return $this->name;
    }
    public function getEmail(){
        return $this->email;
    }
}

$user = new User("Sam", "sam@gmail.com");
$user->name = "Hello";
echo $user->getName();
