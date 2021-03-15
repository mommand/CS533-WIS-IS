<?php
session_start();
// include database file
include('db_connect.php');
// initialize variables
$username = '';
$errors = array();

if (isset($_POST['login'])) {
	
	$username = mysqli_real_escape_string($conn, $_POST['uname']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	// validation
	
	if (empty($username)) {
		array_push($errors, "Username is must!");
	}
	if (empty($password)) {
		array_push($errors, "Password is required!");
	}
	if (count($errors) > 0) {
		$_SESSION['error'] = $errors;
		header('location:login.php');
	}
	else{
		$enpassword = md5($password);
	  	$query = "SELECT * FROM users WHERE username='$username' AND password='$enpassword'";
	  	$results = mysqli_query($conn, $query);
	  	if (mysqli_num_rows($results) == 1) {
	  	  $_SESSION['username'] = $username;
	  	  $_SESSION['full_name'] = $full_name;
	  	  $_SESSION['success'] = "You are now logged in";
	  	  header('location: news.php');
	  	}else {
	  		array_push($errors, "Wrong username/password combination");
	  	}
	}

}

?>
