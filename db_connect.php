<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'news';

$conn = mysqli_connect($host,$username,$password, $database);

if (!$conn) {
	echo "Connection Failed!".mysqli_error();
}



?>