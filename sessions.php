<?php
session_start();

//setcookie("username", $_POST['username'], time()+60);

$users = ['Ramesh', 'John'];

if(in_array($_SESSION['username'], $users)){
    echo "Logged in";
    $userauth = true;

}
else{
    echo "Unable to access page";
    $userauth = false;
}
echo $_SESSION['username'];

?>

<?php
    if($userauth){

    
?>
<a href="/logout.php">Logout</a>

    <?php } ?>
