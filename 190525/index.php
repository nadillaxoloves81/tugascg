<?php  
	require 'config.php';
	$result = mysqli_query($conn, "SELECT * FROM datamhs");
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Data Mahasiswa</title>
</head>
<body>
	<h1>Daftar Mahasiswa</h1>
	<a href="add.php">Tambah Data</a><br><br>
	<table border="1" cellspacing="0" cellpadding="10">
		<tr>
			<th>No.</th>
			<th>NIM</th>
			<th>Nama</th>
			<th>Asal</th>
			<th colspan="2">Aksi</th>
		</tr>
		
		<?php 
			$no = 1; 
			while($data = mysqli_fetch_assoc($result)) {
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['idMhs']; ?></td>
			<td><?php echo $data['namaMhs']; ?></td>
			<td><?php echo $data['asal']; ?></td>
			<td>
				<a href="">Edit</a>
			</td>
			<td>
				<a href="hapus.php?id=<?php echo $data['idMhs']; ?>" onclick="return confirm('Apakah yakin akan menghapus data ini?')">Hapus</a>
			</td>
		<?php } ?>
		</tr>
	</table>
</body>
</html>