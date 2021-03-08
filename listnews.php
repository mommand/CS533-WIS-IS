<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<?php
		include('db_connect.php');
		include('assets.php');
		session_start();
	?>
</head>
<body>
	<div class="container">
<div class="row">
<div class="page-header">
<h5 class="text-center">List of Published News</h5>
<?php 
	if (isset($_SESSION['del_msg'])){

		 ?>
		 	<div class="alert alert-success">
		 		 <?php 
		 		 	echo $_SESSION['del_msg'];
		 		 	unset($_SESSION['del_msg']);
		 		  ?>
		 	</div>
		 <?php
	}

 ?>
</div>
<?php


$db = mysqli_select_db($conn, 'news');

$get_news = "SELECT * FROM news ORDER BY id DESC";

$run_query = mysqli_query($conn, $get_news);


if ($run_query) {
	?>
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Published In</th>
				<th>Category</th>
				<th colspan="4">More Action</th>
			</tr>
		
	<?php
	while ($row = mysqli_fetch_assoc($run_query)) {
		   $i++;
		?>
			<tr>
				<td><?php echo $i; ?></td>
				<td><?php echo $row['title']; ?></td>
				<td><?php echo $row['p_date']; ?></td>
				<td><?php echo $row['category']; ?></td>
				<td><a href="" class="btn btn-primary">Details</a></td>		
				<td><a href="edit.php?id=<?php echo $row['id']?>" class="btn btn-warning">Edite</a></td>	
				<td>
					<a href="delete_news.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Do you want to delete this record?');" class="btn btn-danger">
					Delete</a>
				</td>	
			</tr>
		<?php
	}
	?>
		</table>
	<?php
}
else{
	echo "Error".mysqli_error($conn);
}

?>
</div>
	</div>
</body>
</html>
