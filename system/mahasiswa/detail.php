<?php include '../../config/akses_block.php' ?>
<?php include '../../config/uri.php' ?>
<?php include '../../layout/header.php' ?>
<?php include '../../layout/topbar.php' ?>

<div class="container text-center mt-5">
	<div class="row">
		<div class="col-6 mt-3">
			<?php
			include '../../config/koneksi.php';
			$id = $_GET['id'];
			$data = mysqli_query($koneksi,"SELECT * FROM tb_mahasiswa WHERE nama='$id'");
			while($d = mysqli_fetch_array($data)){
				?>
				<div class="card" style="width: 70rem;">
					<div class="card-body">
						<h5 class="card-title">Data Lengkap Mahasiswa</h5>
						<hr>
						<div class="card-text">Nama : <?= $d['nama']?></div>
						<div class="card-text">Program Studi : <?= $d['program_studi'] ?></div>
						<div class="card-text">Semester : <?= $d['semester'] ?></div>
						<div class="card-text">Kelas : <?= $d['kelas'] ?></div>
						<div class="card-text">Tahun Angkatan : <?= $d['tahun_angkatan'] ?></div>
						<?php if ($_SESSION['level'] == "Admin" || $_SESSION['level'] == "Pembimbing"): ?>
						<?php endif; ?>
						<a href="index.php" class="btn btn-primary">Kembali</a>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</div>

<?php include '../../layout/footer.php' ?>