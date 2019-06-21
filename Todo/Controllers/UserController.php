<?php

include_once 'config.php';
include_once 'User.php';
$email = $_POST['email'];
$password = $_POST['password'];
if(isset($_POST['name'])){
    $user->login($email, $password, $_POST['name']);
    echo "dd";
}
else {
    $user->login($email, $password);
    echo "dd";
}