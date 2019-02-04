<?php  
	// Ambil data inputan
	$nama    = $_POST["nama"];
	$merek   = $_POST["merek"];
	$jumlah  = $_POST["jumlah"];
	$tgl     = $_POST["tgl"];

	// Ambil data dari $_FILES
	$namaFile   = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error      = $_FILES['foto']['error'];
	$tmpName    = $_FILES['foto']['tmp_name'];

	// Cek apakah tidak ada gambar yang diupload
	if( $error === 4 ) {
		echo "
			<script>
				alert('Pilih gambar terlebih dahulu!');
				document.location.href = 'coba2.php';
			</script>
		";
	}

	// Cek apakah yang diupload adalah gambar
	$ekstensiOK = ['jpg', 'jpeg', 'png'];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if( !in_array($ekstensiGambar, $ekstensiGambarOK) ) {
		echo "
			<script>
				alert('File yang anda upload bukan gambar!');
				document.location.href = 'coba2.php';
			</script>
		";
	}

	// Cek jika ukuran file terlalu besar
	if( $ukuranFile > 1000000 ) {
		echo "
			<script>
				alert('Ukuran gambar terlalu besar!');
				document.location.href = 'coba2.php';
			</script>
		";
	}

	move_uploaded_file($tmpName, "uploads/".$namaFile);

?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Tampil Data</title>
	<style>
		.container {
			width: 40%;
			height: 500px;
			border: 1px solid black;
			margin: auto;
			padding: 10px 50px;
		}

		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Tampilkan Data Barang</h1>
		<table cellpadding="10" cellspacing="0" width="400">
			<tr>
				<td>Nama Barang</td>
				<td>:</td>
				<td><?php echo $nama; ?></td>
			</tr>

			<tr>
				<td>Merek</td>
				<td>:</td>
				<td><?php echo $merek; ?></td>
			</tr>

			<!-- <tr>
				<td>Jumlah Barang</td>
				<td>:</td>
				<td><?php echo $jumlah ?></td>
			</tr>

			<tr>
				<td>Tanggal Input</td>
				<td>:</td>
				<td><?php echo $tgl; ?></td>
			</tr>

			<tr>
				<td>Gambar</td>
				<td>:</td>
				<td><img src="uploads/<?php echo $namaFile; ?>" width="200"></td>
			</tr>
		</table> -->

		<a href="coba2.php">Kembali ke halaman input</a>

	</div>
	
</body>
</html>