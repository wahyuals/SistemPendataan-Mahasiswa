<?php 
	
	$koneksi = mysqli_connect("localhost", "root", "", "db_pendataan_mahasiswa");

	if (!$koneksi) {
		echo "Koneksi database gagal : " . mysqli_connect_error();
	}

 ?>