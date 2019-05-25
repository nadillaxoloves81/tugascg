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
				<a href="">Hapus</a>
			</td>

		<?php } ?>
		</tr>
	</table>
</body>
</html>