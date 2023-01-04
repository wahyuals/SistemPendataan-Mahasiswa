<?php 

if ($_POST['submit']) {

	include '../../../config/koneksi.php';


			$nama = $_POST['nama'];
			$program_studi = $_POST['program_studi'];
			$semester = $_POST['semester'];
			$kelas = $_POST['kelas'];
			$tahun_angkatan = $_POST['tahun_angkatan'];
			if ($nama == null && $program_studi = null && $semester = null && $kelas = null && $tahun_angkatan = null) {
				echo "Form Harus Di isi!!";
			}

			$data = mysqli_query($koneksi,"UPDATE tb_mahasiswa SET nama ='$nama', program_studi='$program_studi', semester='$semester', kelas='$kelas', tahun_angkatan='$tahun_angkatan' WHERE nama='$nama'") or die(mysqli_error($koneksi));

			echo "
			<script>
			alert('Data Berhasil DiUbah');
			document.location.href = '../index.php';
			</script>";
		}else{
		echo "
		<script>
		alert('EKSTENSI FILE YANG DI UPLOAD TIDAK DI PERBOLEHKAN');
		document.location.href = '../index.php';
		</script>";
	}

echo "
<script>
alert('Anda Terdeteksi Ingin Merusak System');
document.location.href = '../index.php';
</script>";
?>