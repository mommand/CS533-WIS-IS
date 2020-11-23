<?php
include('db_connect.php');
include('assets.php');
$dbname = $_GET['dbname'];

// query
$query = "SHOW TABLES from ".$dbname;
// execute the query
$exe_query = mysqli_query($conn, $query);
if ($exe_query) {
	?>
	<div class="page-header">
		<h4 class="text-center">
			<?php
				echo $dbname. " tables";
			?>
		</h4>
	</div>
	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Table Name</th>
			<th colspan="3">More Action</th>
		</tr>
<?php
while ($records = mysqli_fetch_array($exe_query)) 

{
	@$i++;
	?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><?php echo $records[0];?></td>
			<td><a href="">Drop</td>
			<td><a href="describe.php?dbname=<?php echo $dbname;?>&tab_name=<?php echo $records[0]; ?>">Describe</td>
			<td><a href="">Brows</td>
		</tr>
	<?php
}
?>
</table>
<?php
}
else{
	echo "Error".mysqli_error();
}

?>