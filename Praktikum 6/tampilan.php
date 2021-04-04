<?php
include 'koneksi.php';

$sql = "SELECT * FROM buku_tamu";
$result = mysqli_query($conn, $sql)
?>
<!DOCTYPE html>
<html>
<head>
	<title>Daftar Hadir Tamu</title>
</head>
<body>
	<center>
		<h2>DAFTAR TAMU HADIR</h2>
		<TABLE border="1" style="border-color: yellow; background-color:black; color: white">
			<th>Nama</th>
			<th>Email</th>
			<th>Isi</th>

			<?php
			while ($hadir= mysqli_fetch_array($result)) {
				echo "<tr>";
				echo "<td>".$hadir['NAMA']."</td>";
				echo "<td>".$hadir['EMAIL']."</td>";
				echo "<td>".$hadir['ISI']."</td>";
				echo "</tr>";
			}
			?>
		</TABLE>
	</center>
</body>
</html>