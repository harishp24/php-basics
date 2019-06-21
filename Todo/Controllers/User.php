<?php 
 
include_once 'config.php';
include_once 'RegisterController.php';
include_once 'LoginController.php';
class User {
    private $name;
    private $email;
    private $password;
    private function exits($email){
        $inst = Database::getInstance();
        $conn = $inst->getConnection();
        $sql = "SELECT * FROM Users where email='$email'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            return true;
        } else {
            return false;
        }
    }

    public function login($email, $password, $name = NULL){
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
        if($this->exits($this->email)) {
            LoginController::login($this->email, $this->password);
        }
        else{
            if(isset($name)){
                RegisterController::register($this->name, $this->email, $this->password);
                
            }
            else{
                LoginController::login($this->email, $this->password);
            }
        }
    }

    public static function logout(){
        Session::destroy();
        Redirect::to('http://todo.io/login.php');
    }
}

$user = new User();