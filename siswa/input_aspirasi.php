<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Input Aspirasi</title>

    <!-- Font & Icon -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

    <style>
        body {
            margin: 0;
            background: #0f172a;
            font-family: 'Poppins', sans-serif;
        }

        #wrapper {
            display: flex;
        }

        #content-wrapper {
            flex: 1;
            padding: 30px;
        }

        /* Title */
        .page-title {
            color: #e2e8f0;
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 20px;
        }

        /* Card */
        .card {
            background: #1e293b;
            border-radius: 16px;
            padding: 25px;
            color: #e2e8f0;
            box-shadow: 0 0 25px rgba(0,196,255,0.1);
            max-width: 700px;
        }

        /* Form */
        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: 600;
            color: #cbd5e1;
            display: block;
            margin-bottom: 5px;
        }

        .form-control {
            width: 100%;
            padding: 10px;
            background: #0f172a;
            border: 1px solid #334155;
            border-radius: 10px;
            color: #e2e8f0;
        }

        .form-control:focus {
            outline: none;
            border-color: #00c4ff;
            box-shadow: 0 0 0 2px rgba(0,196,255,0.2);
        }

        textarea.form-control {
            resize: none;
        }

        /* Button */
        .btn {
            margin-top: 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 10px;
            font-weight: 600;
            cursor: pointer;
        }

        .btn-primary {
            background: linear-gradient(135deg, #00c4ff, #3b82f6);
            color: white;
        }

        .btn-primary:hover {
            opacity: 0.9;
        }

        /* Layout tengah */
        .content-center {
            display: flex;
            justify-content: center;
        }
    </style>
</head>


<body>

<div id="wrapper">

    <?php include '../components/sidebar-siswa.php'; ?>

    <div id="content-wrapper">

        <div class="page-title">
            <i class="fas fa-edit"></i> Input Aspirasi
        </div>

        <div class="content-center">
            <div class="card">

            <form action="../proses/simpan_aspirasi.php" method="POST">

    <input type="hidden" name="nis" value="<?php echo $_SESSION['nis']; ?>">

    <div class="form-group">
        <label>Kategori</label>
        <select name="kategori" class="form-control" required>
            <option value="">-- Pilih --</option>
            <option value="1">Fasilitas</option>
            <option value="2">Kebersihan</option>
            <option value="3">Pelayanan</option>
        </select>
    </div>

    <div class="form-group">
        <label>Lokasi</label>
        <input type="text" name="lokasi" class="form-control" required>
    </div>

    <div class="form-group">
        <label>Isi</label>
        <textarea name="isi" class="form-control" required></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Kirim</button>

</form>

            </div>
        </div>

        <?php include '../components/footer-siswa.php'; ?>

    </div>

</div>

</body>
</html>