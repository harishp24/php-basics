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
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/">cURL</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="/">Home</a>
      </li>
     
    </ul>
    <?php
        if(!isset($_SESSION['employees'])){
        ?>
    <ul class="navbar-nav">
        <li class="nav-item"><a class="nav-link mr-sm-2" href="/login.php">Login</a></li>
    </ul>
    <?php
        }else{
        ?>
        <ul class="navbar-nav">
        <li class="nav-item active">
                <a href="/" class="nav-link mr-sm-4">View Employees</a>
        </li>
        <li class="nav-item">
                <a href="/logout.php" class="nav-link mr-sm-2">Logout</a>
        </li>
        <?php       
        }
        ?>
    </ul>
  </div>
</nav>
    <div class="container">
        <h1>Employee Details</h1>
        <table class="table">
                <?php
                $employees = $_SESSION['employees'];
                foreach ($employees as $employee) {
                    $selected = $_GET['id'];
                    if($employee['id'] == $selected){
                        echo "<tr>";
                        echo "<td><b>ID</b></td>";
                        echo "<td>{$employee['id']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><b>Named</b></td>";
                        echo "<td>{$employee['name']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><b>Gender</b></td>";
                        echo "<td>{$employee['gender']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><b>Email</b></td>";
                        echo "<td>{$employee['email']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><b>Department</b></td>";
                        echo "<td>{$employee['Department']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><b>City</b></td>";
                        echo "<td>{$employee['City']}</td>";
                        echo "</tr>";
                        echo "<tr>";
                        echo "<td><b>Country</b></td>";
                        echo "<td>{$employee['Country']}</td>";
                        echo "</tr>";
                    }   
                }
                ?>

        </table>
    </div>
</body>
</html>