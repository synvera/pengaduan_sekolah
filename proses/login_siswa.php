<?php
session_start();
include '../config/koneksi.php';

$nis = $_POST['nis'];
$uss = $_POST['username'];
$pw = $_POST['kelas'];

if (!$nis) {
    header("Location: ../index.php?error_nis=NIS tidak boleh kosong&username=" . urlencode($uss) . "&kelas=" . urlencode($pw));
    exit;
}
if (!$uss) {
    header("Location: ../index.php?error_username=Nama tidak boleh kosong&nis=" . urlencode($nis) . "&kelas=" . urlencode($pw));
    exit;
}
if (!$pw) {
    header("Location: ../index.php?error_kelas=Kelas tidak boleh kosong&nis=" . urlencode($nis) . "&username=" . urlencode($uss));
    exit;
}


$query_nis = "SELECT * FROM siswa WHERE nis='$nis'";
$result_nis = mysqli_query($koneksi, $query_nis);
if (mysqli_num_rows($result_nis) == 0) {
    header("Location: ../index.php?error_nis=NIS salah&username=" . urlencode($uss) . "&kelas=" . urlencode($pw));
    exit;
}
$data = mysqli_fetch_assoc($result_nis);

if (strtolower($uss) !== strtolower($data['nama'])) {
    header("Location: ../index.php?error_username=Nama salah&nis=" . urlencode($nis) . "&kelas=" . urlencode($pw));
    exit;
}

if ($pw !== $data['kelas']) {
    header("Location: ../index.php?error_kelas=Kelas salah&nis=" . urlencode($nis) . "&username=" . urlencode($uss));
    exit;
}

$_SESSION['nis'] = $data['nis'];
$_SESSION['nama'] = $data['nama'];
$_SESSION['kelas'] = $data['kelas'];
header("Location: ../siswa/dashboard.php");
exit;
?>