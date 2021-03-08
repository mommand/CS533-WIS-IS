<?php
include('db_connect.php');
mysqli_select_db($conn, 'news');

$id = $_POST['id'];
$title = $_POST['title'];
$category = $_POST['category'];
$p_date	  = $_POST['p_date'];
$body = 	$_POST['body'];

// update query
$update =  "UPDATE news SET title = '$title', p_date = '$p_date', category = $category, body = '$body' WHERE  id = $id";
// execute query
$exe =  mysqli_query($conn, $update);
if ($exe) {
	
	session_start();
	$_SESSION['success'] = "Record has been successfully updated!";
	header('location:edit.php');
}
else{
	echo mysqli_error($conn);
}

?>