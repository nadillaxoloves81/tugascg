<?php  
	$conn = mysqli_connect("localhost", "root", "", "dbmhs");
	if(mysqli_connect_errno($conn) > 0) {
		die("Gagal terkoneksi!");
	}

?>