<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<?php
	  include('assets.php');
	  session_start();
	?>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="row">
			<div class="page-header">
				<h4 class="text-center">
					Sign In!
				</h4>
			</div>
			<div class="row">
				 <?php
				   if (isset($_SESSION['error'])) {
				    	?>
				    	<div class="aler alert-danger">
				    		 <?php
				    		 	foreach ($_SESSION['error'] as $err) {
				    		 		?>
				    		 		 <p><?php echo $err; ?></p>
				    		 		<?php
				    		 	}
				    		 ?>
				    	</div>	

				    	<?php
				    	unset($_SESSION['error']);
				    } 
				 ?>
			</div>
		   </div>
		   <form action="loginController.php" method="post">
		   
		   <div class="row form-group">
		   	<div class="col-md-12">
		   		<label>Usrename</label>
                <input type="text" name="uname" class="form-control">
		   	</div>
		   </div>
		   <div class="row form-group">
		   	<div class="col-md-12">
		   		<label>Password</label>
                <input type="password" name="password" class="form-control">
		   	</div>
		   </div>
		   <div class="row form-group">
		   	<div class="col-md-12">
                <input type="submit" name="login" class="btn btn-primary" value="Login!!">
		   	</div>
		   </div>
		   </form>
		</div>
	</div>	
</div>
</body>
</html>