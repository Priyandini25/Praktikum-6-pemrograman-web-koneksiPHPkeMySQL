<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDb";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (mysqli_connect_errno()) {
	echo "Failed to Connect to MySQL: ". mysqli_connect_error();
	exit();
}
?>