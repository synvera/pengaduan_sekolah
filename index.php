<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        height: 90vh;
        justify-content: center;
        align-items: center;
        display: flex;
    }
    .container {
        width: 300px;
        margin: 0 auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
        text-align: center;
        margin-bottom: 20px;
    }
    
    form{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    input[type="text"],
    input[type="password"] {
        width: 90%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 3px;
    }
    
    button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }
    
    button:hover {
        background-color: #0056b3;
    }
</style>
<body>
<div class="container">
    <h1>Login Siswa</h1>
    <?php
        $error_nis = isset($_GET['error_nis']) ? $_GET['error_nis'] : '';
        $error_username = isset($_GET['error_username']) ? $_GET['error_username'] : '';
        $error_kelas = isset($_GET['error_kelas']) ? $_GET['error_kelas'] : '';
        $nis = isset($_GET['nis']) ? htmlspecialchars($_GET['nis']) : '';
        $username = isset($_GET['username']) ? htmlspecialchars($_GET['username']) : '';
        $kelas = isset($_GET['kelas']) ? htmlspecialchars($_GET['kelas']) : '';
    ?>
    <form action="proses/login_siswa.php" method="post" style="width:100%">
        <input type="text" name="nis" placeholder="Masukan NIS" value="<?= $nis ?>" required>
        <?php if ($error_nis): ?>
            <div style="color:red; font-size:12px; margin-bottom:8px; width:100%; text-align:left;">
                <?= $error_nis ?>
            </div>
        <?php endif; ?>
        <input type="text" name="username" placeholder="Masukan Nama Siswa" value="<?= $username ?>" required>
        <?php if ($error_username): ?>
            <div style="color:red; font-size:12px; margin-bottom:8px; width:100%; text-align:left;">
                <?= $error_username ?>
            </div>
        <?php endif; ?>
        <input type="text" name="kelas" placeholder="Masukan Kelas" value="<?= $kelas ?>" required>
        <?php if ($error_kelas): ?>
            <div style="color:red; font-size:12px; margin-bottom:8px; width:100%; text-align:left;">
                <?= $error_kelas ?>
            </div>
        <?php endif; ?>
        <button type="submit">Login</button>
    </form>
</div>
</body>
</html>
