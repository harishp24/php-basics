<?php
session_start();
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.jsonbin.io/b/5cf9fc8ad2127723845d5b8f/2"); # API URL
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); # Get Site Data
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false); # Skip SSL Host Verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); # Skip SSL Peer Verification
$json = curl_exec($ch);
//var_dump($json);
$_SESSION['employees'] = json_decode($json, true);
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
    <ul class="navbar-nav active">
        <li class="nav-item"><a class="nav-link mr-sm-2" href="/login.php">Login</a></li>
    </ul>
    <?php
        }else{
        ?>
        <ul class="navbar-nav">
        <li class="nav-item">
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
        <h3>Logged in</h3>
    </div>
</body>
</html>