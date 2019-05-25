<?php  
	require 'config.php';
	$id = $_GET['id'];

	$query = mysqli_query($conn, "DELETE FROM datamhs WHERE idMhs = '$id'");
	if(mysqli_affected_rows($conn) > 0) {
		echo "
			<script>
				alert('Data berhasil dihapus!')
				document.location.href = 'index.php';
			</script>
		";
	}

?>