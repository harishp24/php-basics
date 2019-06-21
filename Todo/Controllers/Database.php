<?php
require_once 'config.php';
class Database {
    private $con;
    private static $instance = NULL;

    private function __construct(){
        $this->con = new mysqli(SERVER_NAME, USER_NAME, PASSWORD, DATABASE);
    }

    public static function getInstance() {
        if (self::$instance == null) {
            $className = __CLASS__;
            self::$instance = new $className;
        }
        return self::$instance;
    }

    public function execute($query){
        if ($this->getConnection()->query($query) === TRUE) {
            return true;
        } else {
            return $this->conn->error;
        }
    }

    public function getConnection() {
        return $this->con;
    }
}

// $inst = Database::getInstance();
// $conn = $inst->getConnection();
// $sql = "INSERT INTO Users (name, email, password) VALUES ('Harish', 's@gmail.com', 'sasds')";
// $query = $conn->query($sql);
// if ($query) {
//     echo "sucess";
// } else {
//     echo "fail";
// }

