<!DOCTYPE html>
<html>
<head>
	<title>Upload News</title>
	<?php
		include('assets.php');
		session_start();
	?>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="row">
				<div class="page-header">
					<h4 class="text-center">
						Publish your news!
					</h4>
				</div>
			</div>
			<form action="newsController.php" method="post">
				<div class="row form-group">
					<?php
					if (isset($_SESSION['success'])) {
						?>
						 <div class="alert alert-success">
						 	 <p class="text-center">
						 	 	<?php echo $_SESSION['success']; ?>
						 	 </p>
						 </div>
						<?php
					}
					?>
					<div class="col-md-6">
						<label>Title</label>
						<input type="text" name="title" class="form-control">
						<?php
						 if (isset($_SESSION['error'])) {
						 	?>
						 	 <p class="text-danger">
						 	 	<?php 
						 	 	echo $_SESSION['error'];
						 	 	unset($_SESSION['error']); 
						 	 	?>
						 	 </p>
						 	<?php
						 }
						?>
					</div>
				</div>
				<div class="row form-group">
						<div class="col-md-6">
						<label>Publish Date:</label>
						<input type="date" name="p_date" class="form-control">
					    </div>
					</div>
				<div class="row form-group">
					<div class="col-md-6">
						<label>Category</label>
						<select class="form-control" name="category">
							<option value="">.. please select..</option>
							<option value="sport">Sport</option>
							<option value="Political">Political</option>
							<option value="economics">Economics</option>
						</select>
						<?php
						 if (isset($_SESSION['error1'])) {
						 	?>
						 	 <p class="text-danger">
						 	 	<?php 
						 	 	echo $_SESSION['error1'];
						 	 	unset($_SESSION['error1']); 
						 	 	?>
						 	 </p>
						 	<?php
						 }
						?>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-10">
						<label>Body</label>
						<textarea class="form-control" name="body" rows="10">
						</textarea>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-md-6">
						 <input type="submit" name="submit" value="Publish!" class="btn btn-primary">
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>