<?php
session_start();
include '../config/koneksi.php';

// Ambil data
$judul    = $_POST['judul'];
$kategori = $_POST['kategori'];
$isi      = $_POST['isi'];

// Ambil id siswa dari session
$id_siswa = $_SESSION['id_siswa'];

// Validasi
if (!$judul) {
    header("Location: input_aspirasi.php?error=Judul tidak boleh kosong");
    exit;
}

if (!$kategori) {
    header("Location: input_aspirasi.php?error=Kategori tidak boleh kosong");
    exit;
}

if (!$isi) {
    header("Location: input_aspirasi.php?error=Isi aspirasi tidak boleh kosong");
    exit;
}

// Default
$status = "pending";
$tanggal = date("Y-m-d H:i:s");

// Query simpan
$query = "INSERT INTO aspirasi (id_siswa, judul, kategori, isi, status, tanggal)
          VALUES ('$id_siswa', '$judul', '$kategori', '$isi', '$status', '$tanggal')";

$result = mysqli_query($koneksi, $query);

if ($result) {
    header("Location: dashboard.php?success=Aspirasi berhasil dikirim");
    exit;
} else {
    header("Location: input_aspirasi.php?error=Gagal menyimpan data");
    exit;
}
?>