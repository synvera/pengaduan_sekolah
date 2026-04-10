<?php
session_start();
include '../config/koneksi.php';

$uss = $_POST['username'];
$pw = $_POST['password'];

$query = ("SELECT * FROM admin WHERE username='$uss'");
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
    $data = mysqli_fetch_assoc($result);
    if ($pw == $data['password']) {
        $_SESSION['username'] = $data['username'];
        $_SESSION['nama'] = $data['nama'];
        header("Location: ../admin/dashboard.php");
    } else {
        echo "Password Salah";
    }
} else {
    echo "dataS Tidak Ditemukan";
}
?>