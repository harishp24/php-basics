<?php

class User 
{
    public function __construct(){
        echo "From Contructor\n";
    }
    public function getName(){
        echo "john\n";
    }
    public function __destruct(){
        echo "From Destructor\n";
    }
}

$user = new User;
$user->getName();