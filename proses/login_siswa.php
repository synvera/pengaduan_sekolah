<?php
session_start();
include '../config/koneksi.php';

$uss = $_POST['nama'];
$pw = $_POST['password'];

if (!$uss) {
    header("Location: ../index.php?error_username=Nama tidak boleh kosong&nis=" . urlencode($nis) . "&kelas=" . urlencode($pw));
    exit;
}
if (!$pw) {
    header("Location: ../index.php?error_kelas=Kelas tidak boleh kosong&nis=" . urlencode($nis) . "&username=" . urlencode($uss));
    exit;
}


$query_nis = "SELECT * FROM siswa WHERE nama='$uss'";
// Cek user di database
$query = "SELECT * FROM siswa WHERE nama='$uss'";
$result = mysqli_query($koneksi, $query);

if ($result && mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    // Cek password
    if ($pw == $data['password']) {
        $_SESSION['nama'] = $data['nama'];
        $_SESSION['id_siswa'] = $data['id_siswa'];
        header("Location: ../siswa/dashboard.php");
        exit;
    } else {
        header("Location: ../index.php?error_password=Password salah");
        exit;
    }
} else {
    header("Location: ../index.php?error_username=Nama tidak ditemukan");
    exit;
}
?>