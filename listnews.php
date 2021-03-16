<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<?php
		include('db_connect.php');
		include('assets.php');
		session_start();
	?>
<script type="text/javascript">
	function filterRecords(str){
		if (str == '') {
			document.getElementById('result').innerHTML = "No Records available";
			return;
		}
		else{
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onreadystatechange = function(){
				if (this.readyState == 4 && this.status == 200) {
					document.getElementById('result').innerHTML = this.responseText;
				}
			};
			xmlhttp.open('GET','filternews.php?para='+str, true);
			xmlhttp.send();
		}
	}
</script>
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
<div class="row">
	<div class="row form-group" style="padding-left: 20px;">
		<div class="col-md-4">
			<label>Filter by Catergory</label>
			<select class="form-control" onchange="filterRecords(this.value);">
				<option value="">Please select</option>
				<option value="1">Education</option>
				<option value="2">Economic</option>
				<option value="3">Political</option>
			</select>
		</div>
		<div class="col-md-4">
			<label>Keyword</label>
			<input type="text" class="form-control" onkeyup="filterRecords(this.value)">
		</div>
	</div>
	</div>
	<div class="row" id="result">
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
</div>
</div>
	</div>
</body>
</html>
