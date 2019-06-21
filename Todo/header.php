<?php
include_once 'Controllers/config.php'
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Todo</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body style="background-color: #e8eef3;">
    
    <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<a class="navbar-brand" href="#">TODO</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
			<div class="navbar-nav">
			<a class="nav-item nav-link" href="http://todo.io">Dashboard</a>
			</div>
		</div>
		<div class="navbar-nav">
		<?php 
		if(SESSION::exists('id')) {
			echo "<a class='nav-item nav-link' href='http://todo.io/logout.php'>Logout</span></a>";
		}
		else {
			echo "<a class='nav-item nav-link' href='http://todo.io/register.php'>Register</span></a>";
			echo "<a class='nav-item nav-link' href='http://todo.io/login.php'>Login</span></a>	";
		}  
		?>
		</div>
	</nav>
    </header>
