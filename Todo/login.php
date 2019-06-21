<?php require_once 'header.php';
if(SESSION::exists('id')) {
    header('Location: http://todo.io');
}
else {
?>
<div class="container">
<div class="row mt-3">
<h1 class="col-2 mr-auto ml-auto">Login</h1>

</div>
<div class="row">
<div class="col-4 mr-auto ml-auto">
<?php
if(isset($_GET['error'])){
    if($_GET['error']=='loginerror') {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        Email or password is invalid!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        </div>';
    }
}
?>
</div>
</div>
<div class="row mt-4">
    <div class="col-4 mr-auto ml-auto">
    <form action="Controllers/UserController.php" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" class="form-control" id="email"  name="email" placeholder="Enter Your Email" autocomplete="off" required>
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" id="password"  name="password" placeholder="Enter Password" autocomplete="off" required>
    </div>
    <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div></div></div>

<?php require_once 'footer.php'; }?>