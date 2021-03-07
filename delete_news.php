<?php
include('db_connect.php');

$id = $_GET['id'];
mysqli_select_db($conn, 'news');
$query = "DELETE FROM news WHERE id = $id";

if (mysqli_query($conn, $query)) {
	session_start();
	$_SESSION['del_msg'] = "The record has been successfully deleted!";
	header('location:listnews.php');
}



?>
