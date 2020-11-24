<?php
include('db_connect.php');
session_start();
// get form data
$title = $_POST['title'];
$p_date = $_POST['p_date'];
$category = $_POST['category'];
$body 	  = $_POST['body'];
// form validation
if (empty($title)) {
	$_SESSION['error'] = "The title field is required!";
	header('location:news.php');
}
if (empty($category)) {
	$_SESSION['error1'] = "The category field is required!";
	header('location:news.php');
}
// send data to database table
$db = mysqli_select_db($conn, 'tech_news');
// insert query
$insert_query = "INSERT INTO news(id,title,p_date,category,body)VALUES (null, '$title','$p_date','$category','$body')";
if (mysqli_query($conn,$insert_query)) {
	
	$_SESSION['success'] = "Your news has successfully published!";
	header('location:news.php');
}
else{
	echo "Error";
}

?>