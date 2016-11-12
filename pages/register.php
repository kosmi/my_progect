<h1>Register</h1>
<?php 	
if (isset($_POST['adduser'])) {
	if(register($_POST['login1'],$_POST['pass1'], $_POST['email'])) {
		echo '<h3 style="color:green">Registration is successful</h3>';
	}

 }
 else {
 	?>
 	<form action="index.php?page=4" method="post">
 		<div class="form-group">
 			<label for="login1">Login</label>
 			<input type="text" name="login1" placeholder="Login" class="form-control">
 		</div>
 		<div class="form-group">
 			<label for="pass1">Password</label>
 			<input type="text" name="pass1" placeholder="Password" class="form-control">
 		</div>
 		<div class="form-group">
 			<label for="pass2">Password*</label>
 			<input type="text" name="pass2" placeholder="Confirm password" class="form-control">
 		</div>
 		<div class="form-group">
 			<label for="email">Email</label>
 			<input type="text" name="email" placeholder="email" class="form-control">
 		</div>
 		<button type="submit" class="btn btn-primary" name="adduser">Register</button>
 	</form>
 <?php 	
 } 

?>