<?php  
include 'koneksi.php';
if (isset($_GET['nim'])) {
	$nim = $_GET['nim'];
	$query = mysqli_query($koneksi, "DELETE FROM mahasiswas WHERE nim=$nim");
	if ($query) {
		echo "<script>alert('Hapus data berhasil !'); window.location.replace('index.php');</script>";
	}else {
		echo "<script>alert('Hapus data gagal !'); window.location.replace('index.php');</script>";
	}
}
?>