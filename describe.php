<?php
include('db_connect.php');
include('assets.php');
$dbname = $_GET['dbname'];
$table_name = $_GET['tab_name'];
// database selection
$db = mysqli_select_db($conn, $dbname);
// query
$query = "DESCRIBE ".$table_name;
// execute query 
$exe_query = mysqli_query($conn, $query);
//check
if ($exe_query) {
	?>
		<table class="table table-bordered">
			<tr>
				<th>Field</th>
				<th>Type</th>
				<th>Null</th>
				<th>Key</th>
				<th>Default</th>
				<th>Extra</th>
			</tr>
	<?php
	while ($table_rec = $exe_query->fetch_assoc()) {
		?>
			<tr>
				<td>
					<?php echo $table_rec['Field'];?>	
				</td>
				<td>
					<?php echo $table_rec['Type'];?>	
				</td>
				<td>
					<?php echo $table_rec['Null'];?>	
				</td>
				<td>
					<?php echo $table_rec['Key'];?>	
				</td>
				<td>
					<?php echo $table_rec['Default'];?>	
				</td>
				<td>
					<?php echo $table_rec['Extra'];?>	
				</td>
			</tr>
		<?php
	}
	?>
		</table>
	<?php
}
else{
	echo "Error";
}

?>