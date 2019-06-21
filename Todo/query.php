<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "todo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// sql to create table
$sql = "CREATE TABLE Users (
id INT(6) AUTO_INCREMENT, 
name VARCHAR(30) NOT NULL,
email VARCHAR(50) NOT NULL,
password VARCHAR(30) NOT NULL,
reg_date TIMESTAMP,
PRIMARY KEY (id),
UNIQUE (email)

)";

if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}


$sql = "CREATE TABLE todos (
    id INT(6) AUTO_INCREMENT,
    user_id INT(6),
    name VARCHAR(30) NOT NULL,
    completed BOOLEAN,
    created TIMESTAMP,
    PRIMARY KEY (id),
    FOREIGN KEY (user_id) REFERENCES Users(id) 
    )";
    
    if ($conn->query($sql) === TRUE) {
        echo "Table Todos created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }