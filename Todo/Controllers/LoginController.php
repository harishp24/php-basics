<?php 
include_once 'config.php';
class LoginController {
    private static $id;
    public static function login($email, $password){
        $inst = Database::getInstance();
        $conn = $inst->getConnection();
        $sql = "SELECT * FROM Users where email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                if($email == $row["email"] && $password == $row["password"]){
                    Session::getSession('id', $row["id"]);
                    Redirect::to('http://todo.io');
                }
                else{
                    Redirect::to('http://todo.io/login.php?error=loginerror');
                }
            }
        } else {
            Redirect::to('http://todo.io/login.php?error=loginerror');
        }
    }
}
