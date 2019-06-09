<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View Details</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    
    <div class="container">
        <h1>Employee Details</h1>
        <table class="table">
                <?php
                $employees = $_SESSION['employees'];
                foreach ($employees as $employee) {
                    $selected = $_GET['id'];
                    if($employee['id'] == $selected){
                        echo "<tr>";
                        echo "<td>ID</td>";
                        echo "<td>{$employee['id']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Named</td>";
                        echo "<td>{$employee['name']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Gender</td>";
                        echo "<td>{$employee['gender']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Email</td>";
                        echo "<td>{$employee['email']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Department</td>";
                        echo "<td>{$employee['Department']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>City</td>";
                        echo "<td>{$employee['City']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td>Country</td>";
                        echo "<td>{$employee['Country']}</td>";
                        echo "</tr>";
                    }   
                }
                ?>

        </table>
    </div>
</body>
</html>