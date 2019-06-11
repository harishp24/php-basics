<?php

class User 
{
    public function __construct(){
        echo "From Contructor";
    }
    public function getName(){
        echo "john";
    }
    public function __destruct(){
        echo "From Destructor";
    }
}

$user = new User;
echo $user->getName();