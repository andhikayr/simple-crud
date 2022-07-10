<?php
    include 'koneksi.php';
    $nim =  $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $sql = "UPDATE mahasiswas SET nama='$nama', kelas='$kelas', jenis_kelamin='$jenis_kelamin' WHERE nim='$nim'";

    if($koneksi->query($sql) === TRUE)
    {
        echo "<script>alert('Data berhasil diubah'); window.location.replace('index.php');</script>";
    } else {
        echo "<script>alert('Data gagal diubah'); window.location.replace('edit.php');</script>";
    }
    $koneksi->close();
?>