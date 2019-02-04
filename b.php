<?php  
// Ambil data dari $_FILES
	$namaFile   = $_FILES['foto']['name'];
	$ukuranFile = $_FILES['foto']['size'];
	$error      = $_FILES['foto']['error'];
	$tmpName    = $_FILES['foto']['tmp_name'];
	$maxSize = 1024 * 1000;
	$validEkstensi = ["jpeg", "jpg", "png", "gif"];
	$ekstensiGambar = explode('.', $namaFile);
	$ekstensiGambar = strtolower(end($ekstensiGambar));

	if( $error === 4 ) {
		echo "
			<script>
				alert('Pilih gambar terlebih dahulu!');
				document.location.href = 'a.php';
			</script>
		";
	} else if (!in_array($ekstensiGambar, $validEkstensi)){
		echo "
			<script>
				alert('File yang anda upload bukan gambar!');
				document.location.href = 'a.php';
			</script>
		";
	} else if ($ukuranFile > $maxSize) {
		echo "
			<script>
				alert('Ukuran gambar terlalu besar!');
				document.location.href = 'a.php';
			</script>
		";
	} else {
		move_uploaded_file($tmpName, "uploads/".$namaFile);
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Gallery</title>
	<style>
		.container {
			border: 2px solid black;
			width: 400px;
			padding: 5px;
		}
	</style>
</head>
<body>
<div class="container">
	<h1>My Memory</h1>
	<table>
		<tr>
			<td>Gambar</td>
			<td>:</td>
			<td><img src="uploads/<?php echo $namaFile; ?>" width="300"></td>
		</tr>
	</table>

	<td><a href="a.php">Kembali mengingat kenangan masa lalu</a></td>
</div>
</body>
</html>