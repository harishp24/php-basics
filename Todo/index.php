<?php 
include_once 'header.php';
include_once 'Controllers/todo.php';
?>
<div class="container">
   	<?php if(SESSION::exists('id')) { ?> 
    <div class="row mt-4">
		<div class="col-auto mr-auto ml-auto">
			<form class="form-inline mb-4" action="Controllers/TodoController.php" method="POST">
			<div class="form-group mr-2 ">
				<input type="text" class="form-control" id="todo"  name="todo" placeholder="Enter a task" autocomplete="off" required>
			</div>
			<button type="submit" class="btn btn-primary">Add</button>
			</form>
		</div>
	</div>
    <div class="row mt-2">
		<div class="col-4 mr-auto ml-auto">
			<ul class="list-group">
			<?php
			$todos = Todo::getalltodos(SESSION::getSession('id'));
			if(isset($todos)) {
				foreach ($todos as $todo) {	
			?>
				<li class="list-group-item">
					<div class="row">
						<div class="col-9">
							<div class="form-check">
								<input class="form-check-input" type="checkbox" value="<?php echo $todo['name'] ?>" id="<?php echo $todo['id'] ?>"  <?php echo $todo['completed'] ? 'checked' : '' ?>>
								<label class="form-check-label" for="<?php echo $todo['id'] ?>">
									<?php echo '<a href="http://todo.io/controllers/todocontroller.php?id='.$todo['id'].'&completed='.$todo['completed'].'">'.$todo['name'].'</a>'; ?>
								</label>
							</div>
						</div>
						<div class="col-2">
							<?php echo '<a href="http://todo.io/controllers/todocontroller.php?delete='.$todo['id'].'" class="btn btn-danger btn-sm">Delete</a>'; ?>
						</div>
					</div>
				</li>
			<?php } }?>
			</ul>
		</div>
	</div>
   <?php
   }
   else {
      header('Location: http://todo.io/login.php');
   } 
   ?>
</div>
<?php require_once 'footer.php'; ?>