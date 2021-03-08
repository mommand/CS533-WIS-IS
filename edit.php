<?php
include('db_connect.php');
include('assets.php');
session_start();
mysqli_select_db($conn, 'news');
// select execute
$id = $_GET['id'];

// fetech record
$query = "SELECT * FROM news WHERE id = $id";
// execute query
$exe_query = mysqli_query($conn, $query);
// check for the records
if (mysqli_num_rows($exe_query) < 0) {
	 echo "Records are not Exited";
}
else{
	$rec = mysqli_fetch_assoc($exe_query);
}
?>
<div class="container">
<div class="row">
<div class="col-md-8 col-md-offset-2">
	<div class="row">
		<div class="page-header">
			<h4 class="text-center">
				Edit your news!
			</h4>
		</div>
	</div>
	<form action="UpdateController.php" method="post">
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
			<div class="row">
				<p class="pull-right">
					<a href="listnews.php" class="btn btn-primary">Show News</a>
				</p>
			</div>
			<div class="col-md-6">
				<label>Title</label>
				<input type="text" name="title" class="form-control" value="<?php echo $rec['title'];?>">
			</div>
			<input type="hidden" name="id" value="<?php echo $rec['id']; ?>">
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
					<?php
						mysqli_select_db($conn,'news');
						$query = "SELECT * FROM categories";
						$run_q = mysqli_query($conn,$query);
						while ($rec = mysqli_fetch_assoc($run_q)) {
							?>
							<option value="<?php echo $rec['id']; ?>">
							 <?php  echo $rec['name'];?>
							</option>
							<?php
						}
					?>
					
				</select>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-10">
				<label>Body</label>
				<textarea class="form-control" name="body" rows="10">
					<?php echo $rec['body']; ?>
				</textarea>
			</div>
		</div>
		<div class="row form-group">
			<div class="col-md-6">
				 <input type="submit" name="submit" value="Update!" class="btn btn-primary">
			</div>
		</div>
	</form>
</div>
	</div>
</div>