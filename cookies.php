<?php

session_start();
// setcookie("username", $_POST['username'], time()+60);
// $users = ['Ramesh', 'John'];

// if(in_array($_COOKIE['username'], $users)){
//     echo "Logged in";

// }
// else{
//     echo "Unable to access page";
// }
echo $_SESSION['favcolor'];
//setcookie("username", "", time()-60);
//var_dump(in_array('John', $users));