<?php 
	  include '../controllers/UserController.php';
?>

<!--login starts -->

	<h1 class="text text-center">Login</h1>
	<form action="" method="post" class="form-horizontal form-material">
		
			<h4 class="text">User Id</h4> 
			<input type="text" name="id" class="form-control">
			<span><?php echo $err_id;?></span>

			<h4 class="text">Password</h4> 
			<input type="password" name="password"  class="form-control">
			<span><?php echo $err_password;?></span>

			
			<input type="submit" name="btn_login" class="btn btn-danger" value="Login" class="form-control">

			
			<a href="signup.php" >Register</a>

	</form>


