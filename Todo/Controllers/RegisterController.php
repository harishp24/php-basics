<?php 
include_once 'config.php';
include_once 'Database.php';
class RegisterController {
    private static $id;
    public static function register($name, $email, $password){
        $inst = Database::getInstance();
        $sql = "INSERT INTO Users (name, email, password) VALUES ('$name', '$email', '$password')";
        $query = $inst->execute($sql);
        if ($query) {
            LoginController::login($email, $password);
        } else {
            Redirect::to('http://todo.io/register.php');
        }
    }
}