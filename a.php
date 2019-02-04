<?php  
	if(isset($_POST["kirim"])) {
		echo "
			<script>
				alert('Gambar berhasil diupload');
				document.location.href = 'b.php';
			</script>
		";
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Upload</title>
	<style>
		.container {
			border: 1px solid black;
			width: 400px;
			padding: 15px;
			padding-top: 0;
		}

		h1 {
			text-align: center;
		}
	</style>
</head>
<body>
<div class="container">
	<form action="b.php" method="post" enctype="multipart/form-data">
		<h1>My Image</h1>
		<table>
			<tr>
				<td><label for="foto">Upload Foto</label></td>
				<td>:</td>
				<td><input type="file" name="foto" id="foto"></td>
			</tr>
			<tr>
				<td><button type="submit" name="kirim">Kirim</button></td>
			</tr>
		</table>
	</form>
</div>
	
</body>
</html>