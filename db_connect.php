<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'news';

$conn = mysqli_connect($host,$username,$password);

if (!$conn) {
	echo "Connection Failed!".mysqli_error();
}



?>