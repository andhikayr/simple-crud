<?php
    include 'koneksi.php';
    $nim =  $_POST['nim'];
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jenis_kelamin = $_POST['jenis_kelamin'];

    $sql = "INSERT INTO mahasiswas (nim,nama,kelas,jenis_kelamin) VALUES ('".$nim."','".$nama."','".$kelas."','".$jenis_kelamin."')";

    if($koneksi->query($sql) === TRUE)
    {
        echo "<script>alert('Data berhasil disimpan'); window.location.replace('index.php');</script>";
    } else {
        echo "<script>alert('Data gagal disimpan'); window.location.replace('create.php');</script>";
    }
    $koneksi->close();
?>