<?php
include('db_connect.php');
$dbname = $_POST['dbname'];

// validate form
if (isset($dbname) && !empty($dbname)) {
	$query = "CREATE DATABASE ".$dbname;
	$run_query = mysqli_query($conn,$query);
	if ($run_query) {
		session_start();
		$_SESSION['success_msg']= "Databse has been successfully created!";
		header('location:createdbform.php');
	}
	else{
		session_start();
		$_SESSION['error_msg']= "Error in database create".mysqli_error($conn);
		header('location:createdbform.php');
	}

}
else{
	 session_start();
	 $_SESSION['error_msg'] =  "Please fill out the form";
	 header('location:createdbform.php');
}

?>