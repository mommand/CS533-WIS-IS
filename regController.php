<?php
session_start();
// include database file
include('db_connect.php');
// initialize variables
$username = '';
$errors = array();

if (isset($_POST['user_reg'])) {
	$full_name = mysqli_real_escape_string($conn, $_POST['fname']);
	$username = mysqli_real_escape_string($conn, $_POST['uname']);
	$password = mysqli_real_escape_string($conn, $_POST['password']);
	$rpassword = mysqli_real_escape_string($conn, $_POST['rpassword']);
	// validation
	if (empty($full_name)) {
		array_push($errors, "Full name is required!");
	}
	if (empty($username)) {
		array_push($errors, "Username is must!");
	}
	if (empty($password)) {
		array_push($errors, "Password is required!");
	}
	if (empty($rpassword)) {
		array_push($errors, "Re-Type password is required!");
	}
	if ($password != $rpassword) {
		array_push($errors, "Wrong password combination!");
	}

	// check of the user is already exit
	$check_query = "SELECT * FROM users WHERE username = '$username'";
	$exe_query = mysqli_query($conn,$check_query);
	if (mysqli_num_rows($exe_query) > 0) {
		array_push($errors, "Username already exist, please try another one!");
	}
	if (count($errors) > 0) {
		$_SESSION['error'] = $errors;
		header('location:register.php');
	}
	else{
		$enpassword = md5($password);
		// insert query
		$query = "INSERT INTO users(id,full_name,username, password) VALUES (null,'$full_name','$username','$enpassword')";
		$exe_q = mysqli_query($conn, $query);
		if ($exe_q) {
			$_SESSION['full_name'] = $full_name;
			$_SESSION['username']= $username;
			$_SESSION['success'] = 'You are Logged In!';
			header('location:news.php');
		}
	}

}
?>