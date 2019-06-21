<?php

include_once 'config.php';
include_once 'Todo.php';
$id = SESSION::getSession('id');
$status = false;
if(isset($_POST['todo'])){
    $todo->create($id, $_POST['todo'], $status);
}
else {
    //$user->login($email, $password);
}

if(isset($_GET['delete'])) {
    $todo->delete($_GET['delete']);
}

if(isset($_GET['completed'])) {
    $todo->update($_GET['id'], $_GET['completed']);
}