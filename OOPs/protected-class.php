<?php

class User 
{
    protected $name;
    protected $email;

    protected function getName($name){
        $this->name = $name;
        return "Employee Name from parent" . $this->name;
    }
    protected function getEmail($email){
        $this->email = $email;
        return "Employee Email from parent" . $this->email;
    }
}

class Employee extends User{
    public $name;
    public $email;
    public function getEmployeeName($name){
        return $this->getName($name);
    }
    public function getEmployeeEmail($email){
        return $this->getEmail($email);
    }
}

$user = new Employee;
echo $user->getEmployeeName("john"); // access Name from method
echo $user->getEmployeeEmail("john@gmail.com"); // access Name from method