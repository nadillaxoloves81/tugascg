<?php 
	if(isset($_POST["kirim"])) {
		echo "
			<script>
				alert('Data Berhasil ditambahkan!');
				document.location.href = 'coba3.php';
			</script>
		";
	}

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Barang</title>
	<style>
		h1 {
			text-align: center;
		}

		.container {
			width: 40%;
			height: 500px;
			border: 1px solid black;
			margin: auto;
			padding: 10px 50px;
		}
	</style>
</head>
<body>
	
	<div class="container">
	<h1>Input Data Barang</h1>
		<form action="coba3.php" method="post" enctype="multipart/form-data">
			<table width="600">
				<tr>
					<td><label for="nama">Nama</label></td>
					<td>:</td>
					<td><input type="text" name="nama" id="nama" required></td>
				</tr>

				<tr>
					<td><label for="merek">Merek</label></td>
					<td>:</td>
					<td><input type="text" name="merek" id="merek"></td>
				</tr>

				<tr>
					<td><label for="jumlah">Jumlah</label></td>
					<td>:</td>
					<td><input type="number" name="jumlah" id="jumlah"></td>
				</tr>

				<tr>
					<td><label for="tgl">Tanggal Input</label></td>
					<td>:</td>
					<td><input type="date" name="tgl" id="tgl"></td>
				</tr>

				<tr>
					<td><label for="foto">Upload Foto</label></td>
					<td>:</td>
					<td><input type="file" name="foto" id="foto"></td>
				</tr>

				<tr>
					<td><button name="kirim" type="submit">Kirim!</button></td>
				</tr>

			</table>
		</form>
	</div>
</body>
</html>