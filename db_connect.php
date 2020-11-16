<?php
$host = 'localhost';
$username = 'root';
$password = 'root';
$database = 'ACM';

$conn = mysqli_connect($host,$username,$password);

if (!$conn) {
	echo "Connection Failed!".mysqli_error();
}
else{
	echo "connection has been successfully established";
}


?>