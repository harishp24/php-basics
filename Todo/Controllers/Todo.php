<?php
require_once 'config.php';
class Todo {
    public function create($id, $task, $status){
        $inst = Database::getInstance();
        $sql = "INSERT INTO todos (user_id, name, completed) VALUES ('$id', '$task', '$status')";
        $query = $inst->execute($sql);
        if ($query) {
            Redirect::to('http://todo.io');
        } else {
            Redirect::to('http://todo.io?error='.$id);
        }
    }

    public function delete($id){
        $inst = Database::getInstance();
        $sql = "DELETE FROM todos WHERE id='$id'";
        $query = $inst->execute($sql);
        if ($query) {
            Redirect::to('http://todo.io');
        } else {
            Redirect::to('http://todo.io?error=error');
        }
    }

    public function update($id, $comp){
        $inst = Database::getInstance();
        $completed = !$comp;
        $sql = "UPDATE todos SET completed='$completed' WHERE id='$id'";
        $query = $inst->execute($sql);
        if ($query) {
            Redirect::to('http://todo.io');
        } else {
            Redirect::to('http://todo.io?error=error');
        }
    }

    public static function getalltodos($user_id){
        $inst = Database::getInstance();
        $conn = $inst->getConnection();
        $sql = "SELECT * FROM todos where user_id='$user_id'";
        $i = 0;
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $todos[$i]['id'] = $row['id'];
                $todos[$i]['name'] = $row['name'];
                $todos[$i]['completed'] = $row['completed'];
                $i++;
            }
           return $todos;
        } else {
            //Redirect::to('http://todo.io/login.php?error=loginerror');
        }
    }
}

$todo = new Todo();