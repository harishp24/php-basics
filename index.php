<?php
session_start();

?>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
<input type="text" name="username">
<input type="submit" value="Login">
</form>

<?php

$_SESSION["username"] = $_POST['username'];

