<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<?php 
	    session_start();
		include('assets.php');
	?>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="row">
			<div class="page-header">
				<h4 class="text-center">
					 Registration Form
				</h4>
			</div>
		    </div>
    <div class="row">
    	 <?php  
    	  if (isset($_SESSION['error'])) 
    	  {
    	  	?>
    	  	 <div class="alert alert-danger">
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
			<form action="regController.php" method="post">
				<div class="row form-group">
					 <lable>Full Name</lable>
					 <input type="text" name="fname" class="form-control">
				</div>
				<div class="row form-group">
					 <lable>Username</lable>
					 <input type="email" name="uname" class="form-control">
				</div>
				<div class="row form-group">
					 <lable>Password</lable>
					 <input type="password" name="password" class="form-control">
				</div>
				<div class="row form-group">
					 <lable>Re-Type Password</lable>
					 <input type="password" name="rpassword" class="form-control">
				</div>
				<div class="row form-group">
					<input type="submit" class="btn btn-primary" name="user_reg">
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>