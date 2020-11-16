<?php
include('db_connect.php');

$query = "CREATE DATABASE testdb";

$run_query = $conn->query($query);
 if ($run_query) {
 	 echo "Your database has been created!";
 }
 else{
 	echo "Error in database creatation".mysqli_error();
 }

?>