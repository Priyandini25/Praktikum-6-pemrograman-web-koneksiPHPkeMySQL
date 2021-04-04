<!DOCTYPE html>
<html>
<head>
	<title> Buku Tamu </title>
</head>
<body>
	<center> 
		<h1> ISI BUKU TAMU </h1>
		<form action="" method="post">
			<table>
				<tr>
					<td>Nama</td>
					<th>:</th>
					<td><input type="text" name="NAMA" required></td>
				</tr>
				<tr>
					<td>Email</td>
					<td>:</td>
					<td><input type="Email" name="EMAIL" required></td>
				</tr>
				<tr>
				<td>Keperluan</td>
				<td>:</td>
				<td><textarea name="ISI" required></textarea></td>
				</tr>
			</table>
			<p></p>
			<button type="submit" name="submit" style="background-color: grey"> Tambah Data </button>
			<button type="reset" style="background-color: red"> Reset </button>
	</center>		
	</form>	
</body>
</html>

<?php
include 'koneksi.php';

if (isset($_POST['NAMA'])) {
	$NAMA = $_POST['NAMA'];
	$EMAIL = $_POST['EMAIL'];
	$ISI = $_POST['ISI'];

	$sql = "INSERT INTO buku_tamu (NAMA,EMAIL,ISI) VALUES ('$NAMA', '$EMAIL', '$ISI') "

	if (mysqli_query($conn, $sql)) {
		header("location:tabeltamu.php");
	} else {
		echo "Error : ". $sql. "<br>". mysqli_error($conn);
	}

}
?>