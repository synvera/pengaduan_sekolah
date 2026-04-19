<?php 

$host = "localhost";
$uss = "root";
$pw = "";
$db = "pengaduan_sekolah";

$koneksi = mysqli_connect($host, $uss, $pw, $db);

if (!$koneksi) {
    die("Koneksi Gagal");
}

?>