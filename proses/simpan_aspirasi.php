<?php
include '../config/koneksi.php';

// Ambil dari form (BUKAN session lagi)
$nis         = $_POST['nis'];
$id_kategori = $_POST['kategori'];
$lokasi      = $_POST['lokasi'];
$keterangan  = $_POST['isi'];

$status  = "menunggu";
$tanggal = date("Y-m-d H:i:s");

// Validasi simpel
if (!$nis || !$id_kategori || !$lokasi || !$keterangan) {
    echo "Data tidak lengkap";
    exit;
}

// Query
$query = "INSERT INTO aspirasi (nis, id_kategori, lokasi, keterangan, status, tanggal)
          VALUES ('$nis', '$id_kategori', '$lokasi', '$keterangan', '$status', '$tanggal')";

if (mysqli_query($koneksi, $query)) {
    echo "<script>
        alert('Aspirasi berhasil dikirim');
        window.location='../siswa/dashboard.php';
    </script>";
} else {
    echo "Gagal: " . mysqli_error($koneksi);
}
?>