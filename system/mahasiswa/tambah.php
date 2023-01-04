<?php 
include '../../config/akses_block.php';
include '../../config/uri.php';
include '../../layout/header.php';
?>

<div class="container m-5">
	<div class="h1 font-weight-bold text-white">Tambah Data Mahasiswa</div>
	<form action="proses/prosestambah.php" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<div class="col-9">
				<label for="nama" class="font-weight-bold text-white">Nama Mahasiswa : </label>
				<input type="name" class="form-control" id="nama" name="nama" placeholder="Masukan Nama Mahasiswa">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="program_studi" class="font-weight-bold text-white">Program Studi : </label>
				<input type="name" class="form-control" id="program_studi" name="program_studi" placeholder="Masukan Program Studi">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="semester" class="font-weight-bold text-white">Semester : </label>
				<input type="name" class="form-control" id="semester" name="semester" placeholder="Masukan Semester">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="kelas" class="font-weight-bold text-white">Kelas : </label>
				<input type="name" class="form-control" id="kelas" name="kelas" placeholder="Masukan Kelas">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="tahun_angkatan" class="font-weight-bold text-white">Tahun Angkatan : </label>
				<input type="name" class="form-control" id="tahun_angkatan" name="tahun_angkatan" placeholder="Masukan Tahun Angkatan">
			</div>
		</div>
		<div class="ml-3">
			<button type="Login" name="submit" value="submit" class="btn btn-primary">Tambah Data</button>
			<a href="index.php" class="btn btn-danger">Kembali</a>
		</div>
	</form>
</div>
