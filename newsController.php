<?php
include('db_connect.php');
session_start();
// get form data
$title = $_POST['title'];
$p_date = $_POST['p_date'];
$category = $_POST['category'];
$body 	  = $_POST['body'];
$db = mysqli_select_db($conn, 'news');
//distination folder on the server
// form validation
if (empty($title)) {
	$_SESSION['error'] = "The title field is required!";
	header('location:news.php');
}
if (empty($category)) {
	$_SESSION['error1'] = "The category field is required!";
	header('location:news.php');
}
$target_dir = 'uploads/';
$target_file = $target_dir.basename($_FILES['image']['name']);
$file = $target_file;
// file type
$imagetype = strtolower(pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION));
if ($imagetype == 'jpg' || $imagetype == 'jpeg'|| $imagetype == 'png') {
	  if ($_FILES['image']['size'] > 50000) {
	  	 if (file_exists($target_file)) {
	  	 	session_start();
	  	 	$_SESSION['upmsg'] = "file already exist!";
	  	 	header("location:news.php");
	  	 }
	  	 else{
	  	 	if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
	  	 	  // insert query
					$insert_query = "INSERT INTO news(id,title,p_date,category,image,body) VALUES (null, '$title','$p_date','$category','$file','$body')";

					if ($run = mysqli_query($conn,$insert_query)) {
						
						$_SESSION['success'] = "Your news has successfully published!";
						header('location:news.php');
					}
					else{
						echo "Error".mysqli_error($conn);
					}
	  	 	   
		  	 }
		  	 else{
		  	 	echo "not uploaded!";
		  	 }
	  	 }
	  	 
	  }
	}
	else{
		echo "type not allowed";
	}



// send data to database table



?>