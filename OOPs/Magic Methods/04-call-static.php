<?php

class User 
{
    public static $name;
    public static $email;

    public static function __callStatic($func, $args){
       echo "Function: {$func} Not found";
    }
    
    public static function getName(){
        return self::$name;
    }
}
User::$name = "Sami";
echo User::getName();

