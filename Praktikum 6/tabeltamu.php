<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDb";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
	die("Connection Failed : ". mysqli_connect_error());
}
$sql = " CREATE TABLE buku_tamu (ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, NAMA VARCHAR(200) NOT NULL, EMAIL VARCHAR(50) NOT NULL, ISI TEXT)";

if (mysqli_query($conn, $sql)) {
	echo "New table created succesfully";
} else {
	echo "Error : ".$sql . "<br>". mysqli_error($conn);
}
mysqli_close($conn);
?>