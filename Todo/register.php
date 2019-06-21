<?php require_once 'header.php';
if(SESSION::exists('id')) {
    header('Location: http://todo.io');
}
else {
?>
<div class="container">
<div class="row mt-3">
<h1 class="col-2 mr-auto ml-auto">Register</h1>
</div>
<div class="row mt-4">
    <div class="col-4 mr-auto ml-auto">
    <form action="Controllers/UserController.php" method="POST">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="name" class="form-control" id="name" name="name" placeholder="Enter Your Name" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" class="form-control" id="email"  name="email" placeholder="Enter Your Email" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label for="password">Password</label>
        <input type="password" class="form-control" id="password"  name="password" placeholder="Enter Password" autocomplete="off" required>
    </div>
    <button type="submit" class="btn btn-primary">Register</button>
    </form>
</div></div></div>
<?php require_once 'footer.php'; }?>

