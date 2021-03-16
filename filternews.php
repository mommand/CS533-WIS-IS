<?php
include('db_connect.php');
 $para = $_GET['para'];
 $get_news = '';
 if (is_integer($para)) {
 	$get_news = "SELECT * FROM news WHERE category = $para";
 }
 if (is_string($para)) {
 	$get_news = "SELECT * FROM news WHERE title LIKE '%$para%'";
 }

$run_query = mysqli_query($conn, $get_news);


if ($run_query) {
	?>
		<table class="table table-bordered">
			<tr>
				<th>ID</th>
				<th>Title</th>
				<th>Published In</th>
				<th>Category</th>
				<th>Image</th>
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
				<td>
					<img src="<?php echo $row['image']; ?>" width="100">	
				</td>
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