<?php 
include '../../config/akses_block.php';
include '../../config/uri.php';
include '../../layout/header.php';
?>
<?php
include '../../config/koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa WHERE nama='$id'");
while($d = mysqli_fetch_array($data)){
	?>

<div class="container m-5">
	<div class="h1 font-weight-bold text-white">Ubah Data Mahasiswa</div>
	<form action="proses/prosesubah.php" method="post" enctype="multipart/form-data">
		<input type="hidden" name="nim_mhs" value="<?= $d['nim_mhs']?>">
		<div class="form-group">
			<div class="col-9">
				<label for="nama" class="font-weight-bold text-white">Nama Mahasiswa : </label>
				<input type="name" class="form-control" id="nama" name="nama" value="<?= $d['nama']?>" placeholder="Masukan Nama Mahasiswa">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="program_studi" class="font-weight-bold text-white">Program Studi : </label>
				<input type="name" class="form-control" id="program_studi" name="program_studi" value="<?= $d['program_studi']?>" placeholder="Masukan Program Studi">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="semester" class="font-weight-bold text-white">Semester : </label>
				<input type="name" class="form-control" id="semester" name="semester" value="<?= $d['semester']?>" placeholder="semester">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="kelas" class="font-weight-bold text-white">Kelas : </label>
				<input type="name" class="form-control" id="kelas" name="kelas" value="<?= $d['kelas']?>" placeholder="Masukan Kelas">
			</div>
		</div>
		<div class="form-group">
			<div class="col-9">
				<label for="tahun_angkatan" class="font-weight-bold text-white">Tahun Angkatan : </label>
				<input type="name" class="form-control" id="tahun_angkatan" name="tahun_angkatan" value="<?= $d['tahun_angkatan']?>" placeholder="Masukan Tahun Angkatan">
			</div>
		</div>
		<div class="ml-3">
			<button type="Login" name="submit" value="submit" class="btn btn-primary">Ubah Data</button>
			<a href="index.php" class="btn btn-danger">Kembali</a>
		</div>
	</form>
</div>
<?php } ?>

