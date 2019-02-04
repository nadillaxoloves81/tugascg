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
			border: 1px solid black;
			margin: auto;
			padding: 10px 50px;
		}
	</style>
</head>
<body>
	
	<div class="container">
	<h1>Data Mahasiswa Jurusan Sistem Informasi</h1>
		<form action="coba3.php" method="post" enctype="multipart/form-data">
			<table width="600">
				<tr>
					<td><label for="nama">Nama</label></td>
					<td>:</td>
					<td><input type="text" name="nama" id="nama" required></td>
				</tr>

				<tr>
					<td><label for="nim">NIM</label></td>
					<td>:</td>
					<td><input type="text" name="nim" id="nim"></td>
				</tr>

				<tr>
					<td><label for="nim">Tempat Lahir</label></td>
					<td>:</td>
					<td><input type="text" name="nim" id="nim"></td>
				</tr>

				<tr>
					<td><label for="tgl">Tanggal Lahir</label></td>
					<td>:</td>
					<td><input type="date" name="tgl" id="tgl"></td>
				</tr>

				<tr>
					<td><label for="tgl">Alamat</label></td>
					<td>:</td>
					<td><textarea name="" id="" cols="30" rows="5"></textarea></td>
				</tr>

				<tr>
					<td><label for="foto">Jenis Kelamin</label></td>
					<td>:</td>
					<td>
						<select name="" id="">
							<option value="" disabled="">==PILIH==</option>
							<option value="">Laki-Laki</option>
							<option value="">Perempuan</option>
						</select>
					</td>
				</tr>

				<tr>
				<td>Skill</td>
				<td>:</td>
				<td>
					<input type="checkbox" name="shalat[]" value="Shubuh">Programming<br/>
					<input type="checkbox" name="shalat[]" value="Zuhur">Desain<br/>
					<input type="checkbox" name="shalat[]" value="Ashar">Video Editing<br/>
				</td>
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