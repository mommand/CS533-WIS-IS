<!DOCTYPE html>
<html>
<head>
	 <?php
	  include('db_connect.php');
	  include('assets.php');
	  session_start();
	 ?>
	<title>Create DB</title>
</head>
<body>
	<div class="container">
		<?php
			if (isset($_SESSION['error_msg'])) {
				?>
				<div class="row">
					<div class="alert alert-danger">
						<p class="text-center">
							<?php
							   echo $_SESSION['error_msg'];
							   unset($_SESSION['error_msg']);
							?>
						</p>
					</div>
				</div>
				<?php
			}

			if (isset($_SESSION['success_msg'])) {
				?>
				<div class="row">
					<div class="alert alert-success">
						<p class="text-center">
							<?php
							   echo $_SESSION['success_msg'];
							   unset($_SESSION['success_msg']);
							?>
						</p>
					</div>
				</div>
				<?php
			}
		?>
		<div class="row">
			<form action="dbprocess.php" method="post">
				<div class="form-group">
					<label>Databse Name:</label><br>
					<input type="text" name="dbname" class="form-control">
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-primary">
				</div>
			</form>
		</div>
		<div>
			<hr>
			<div class="page-header text-center">
				<h4 align="center">List of Databses</h4>
			</div>
<?php
	$query = "SHOW DATABASES";
	$run_query = $conn->query($query);
	if ($run_query) {
		if ($run_query->num_rows > 0) {
			?>
			 <table class="table table-bordered">
			 	<tr>
			 		<th>ID</th>
			 		<th>Database Name</th>
			 		<th colspan="2">More Actions</th>
			 	</tr>
			<?php
	while ($rows = $run_query->fetch_assoc()) 
		
	{
		@$i++;
				?>
					<tr>
						<td><?php echo $i;?></td>
						<td>
						<?php 
						 echo $rows['Database'];?>
							</td>
						<td><a href="" class="btn btn-danger">Drop</a></td>
						<td><a href="showtable.php?dbname=<?php echo $rows['Database'];?>" class="btn btn-info">Show table</a></td>
					</tr>
				<?php
				 
			}
			?>
		</table>
			<?php
		}
	}
	else{
		echo "error";
	}

			?>
		</div>
	</div>
</body>
</html>