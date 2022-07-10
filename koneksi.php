<?php 
$server = "localhost";
$username = "root";
$password = "";
$db = "dblatihan";

$koneksi = new mysqli($server,$username,$password,$db);
if($koneksi->connect_error)
{
    die("Koneksi error: ".$koneksi->connect_error);
}
?>