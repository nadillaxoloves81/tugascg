<?php  
	require 'config.php';
	if(isset($_POST["simpan"])) {
		$nim = $_POST["nim"];
		$nama = $_POST["nama"];
		$asal = $_POST["asal"];

		$query = mysqli_query($conn, "INSERT INTO datamhs VALUES ('$nim', '$nama', '$asal')");
		if(mysqli_affected_rows($conn) > 0) {
			echo "
				<script>
					alert('Data berhasil disimpan!')
					document.location.href = 'index.php';
				</script>
			";
		} else {
			echo mysqli_errno($conn);
		}

	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tambah Data</title>
</head>
<body>
	<h1>Halaman Tambah Data Mahasiswa</h1>
	<form action="" method="POST">
		<table width="40%">
			<tr>
				<td><label for="nim">NIM</label></td>
				<td>:</td>
				<td><input type="text" name="nim" id="nim"></td>
			</tr>

			<tr>
				<td><label for="nama">Nama</label></td>
				<td>:</td>
				<td><input type="text" name="nama" id="nama"></td>
			</tr>

			<tr>
				<td><label for="asal">Asal</label></td>
				<td>:</td>
				<td><input type="text" name="asal" id="asal"></td>
			</tr>

			<tr>
				<td><button type="submit" name="simpan">Simpan</button></td>
			</tr>
		</table>
	</form>
</body>
</html>