<?php
session_start();
include '../config/koneksi.php';

$nama = $_POST['nama'];
$password = $_POST['password'];

if (!$nama || !$password) {
    header("Location: ../index.php?error=Isi semua data");
    exit;
}

$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nama='$nama'");

if (mysqli_num_rows($query) > 0) {
    $data = mysqli_fetch_assoc($query);

    if ($password == $data['password']) {

        $_SESSION['nis']  = $data['nis'];
        $_SESSION['nama'] = $data['nama'];

        header("Location: ../siswa/dashboard.php");
        exit;

    } else {
        header("Location: ../index.php?error=Password salah");
        exit;
    }

} else {
    header("Location: ../index.php?error=User tidak ditemukan");
    exit;
}
?>