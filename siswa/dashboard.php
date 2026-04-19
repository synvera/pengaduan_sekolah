<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Pengaduan Sekolah - Dashboard</title>

    <!-- Font & Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

<style>
* {
    font-family: 'Poppins', sans-serif;
}

body {
    background: #f1f5f9;
    margin: 0;
}

#wrapper {
    display: flex;
}

.dashboard-container {
    flex: 1;
    padding: 30px;
    width: 100%;
}
/* WELCOME */
.welcome-card {
    background: linear-gradient(135deg, #1e293b, #334155);
    color: white;
    border-radius: 16px;
    padding: 30px;
    margin-bottom: 25px;
}
.welcome-card p {
    color: #cbd5e1;
}

/* STAT */
.stat-row {
    display: flex;
    gap: 20px;
    flex-wrap: wrap;
    margin-bottom: 25px;
}
.stat-card {
    flex: 1;
    min-width: 200px;
    background: #1e293b;
    color: white;
    padding: 20px;
    border-radius: 14px;
    position: relative;
    transition: 0.3s;
}
.stat-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 10px 25px rgba(0,0,0,0.2);
}
.title {
    font-size: 0.9rem;
    color: #94a3b8;
}
.value {
    font-size: 2rem;
    font-weight: bold;
}
.stat-card i {
    position: absolute;
    right: 15px;
    top: 15px;
    opacity: 0.2;
    font-size: 2rem;
}

/* CONTENT */
.content {
    background: white;
    border-radius: 16px;
    padding: 20px;
    margin-top: 20px;
}

/* HEADER */
.content-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* BUTTON */
.btn-add {
    background: #00c4ff;
    color: white;
    padding: 8px 14px;
    border-radius: 8px;
    text-decoration: none;
    font-size: 0.85rem;
}
.btn-add:hover {
    background: #009ecf;
}

/* LIST */
.aduan-item {
    padding: 32px;
    border-bottom: 1px solid #eee;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* BADGE */
.badge {
    padding: 5px 10px;
    border-radius: 6px;
    font-size: 1rem;
    color: white;
}
.proses { background: orange; }
.selesai { background: green; }
.tolak { background: red; }

/* EMPTY */
.empty {
    text-align: center;
    padding: 40px;
    color: #64748b;
}
.empty i {
    font-size: 50px;
    color: #cbd5e1;
}

</style>
</head>

<?php
mysqli_report(MYSQLI_REPORT_OFF);
include '../config/koneksi.php';

/* TOTAL DATA */
$totalAduan = 0;
$q1 = @mysqli_query($koneksi,"SELECT COUNT(*) as t FROM aspirasi");
if($q1) $totalAduan = mysqli_fetch_assoc($q1)['t'];

$totalKategori = 0;
$q2 = @mysqli_query($koneksi,"SELECT COUNT(*) as t FROM kategori");
if($q2) $totalKategori = mysqli_fetch_assoc($q2)['t'];

$totalSiswa = 0;
$q3 = @mysqli_query($koneksi,"SELECT COUNT(*) as t FROM siswa");
if($q3) $totalSiswa = mysqli_fetch_assoc($q3)['t'];

/* RECENT */
$q4 = mysqli_query($koneksi,"
    SELECT keterangan AS judul, status, tanggal 
    FROM aspirasi 
    ORDER BY tanggal DESC 
    LIMIT 5
");

$recent = [];

if($q4){
    while($r = mysqli_fetch_assoc($q4)){
        $recent[] = $r;
    }
} else {
    echo "Query error: " . mysqli_error($koneksi);
}

echo mysqli_error($koneksi);
?>



<body>
<div id="wrapper">

<?php include '../components/sidebar-siswa.php'; ?>

<div class="dashboard-container">

    <!-- WELCOME -->
    <div class="welcome-card">
        <h1>Dashboard Siswa</h1>
        <p>Pantau pengaduan, kategori, dan data siswa secara real-time.</p>
    </div>

    <!-- STAT -->
    <div class="stat-row">
        <div class="stat-card">
            <div class="title">Jumlah Pengaduan</div>
            <div class="value"><?= $totalAduan ?></div>
            <i class="fas fa-comments"></i>
        </div>

        <div class="stat-card">
            <div class="title">Total Kategori</div>
            <div class="value"><?= $totalKategori ?></div>
            <i class="fas fa-list"></i>
        </div>

        <div class="stat-card">
            <div class="title">Total Siswa</div>
            <div class="value"><?= $totalSiswa ?></div>
            <i class="fas fa-user-graduate"></i>
        </div>
    </div>

    <!-- RECENT -->
    <div class="content">
        <div class="content-header">
            <h2>Pengaduan Terbaru</h2>
            <a href="input_aspirasi.php" class="btn-add">+ Buat</a>
        </div>

        <?php if(empty($recent)): ?>
            <div class="empty">
                <i class="fas fa-folder-open"></i>
                <p>Belum ada pengaduan</p>
            </div>
        <?php else: ?>
            <?php foreach($recent as $r): ?>
                <div class="aduan-item">
                    <div>
                        <b><?= $r['judul'] ?? '-' ?></b>
                    </div>

                    <?php
                        $s = strtolower($r['status']);
                        if($s == 'menunggu') echo "<span class='badge proses'>Diproses</span>";
                        elseif($s == 'selesai') echo "<span class='badge selesai'>Selesai</span>";
                        else echo "<span class='badge tolak'>Ditolak</span>";
                    ?>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

    <!-- EXTRA -->
    <div class="content">
        <h3>Informasi</h3>
        <p style="color:#64748b;">
            Gunakan tombol "+ Buat" untuk mengirim pengaduan baru ke sistem.
        </p>
    </div>

</div>
</div>
</body>
</html>