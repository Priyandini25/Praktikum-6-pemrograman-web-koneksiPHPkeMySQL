<html>
<head>
	<title>Koneksi Database MySQL</title>
</head>
<body>
	<h1> Demo Koneksi Database </h1>
	<<?php 
	//variabel u/ menampung fungsi connect sql
	$con = mysqli_connect("localhost","root","","myDB");

	//check connection 
	if (mysqli_connect_errno()) {
	 	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	 	exit();
	 } 
	 ?>
</body>
</html>