<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Pengaduan sekolah - Dashboard</title>
    <!-- Custom fonts for this template-->

    <!-- Custom styles for this template-->
    
</head>
<style>
    .wrapper{
        display: block;
    }
    .container {
        display: flex;
        gap: 20px;
        padding: 20px;
        height: 200px;
    }

    .sumaduan, .sumfeedback, .sumhistory {
        padding: 10px 20px;
        flex: 1;
        background: grey;
        height: auto;
        border-radius: 16px;
        color: #e2e8f0;
    }

    .h11{
        font-size: 25px;
    }

    .h22{
        font-size: 40px;
        font-weight: 600;
    }
</style>
<body id="page-top">
<div id="wrapper">

    <?php include '../components/sidebar-siswa.php'; ?>
    <div class="container">
        <div class="sumaduan">
            <div class="h11">
                Jumlah Pengaduan
            </div>
            <div class="h22">
                20
            </div>
        </div>
        <div class="sumfeedback">

        </div>
        <div class="sumhistory">

        </div>
    </div>
    <div class="content">
        <div class="kartu">
            <h1>halo</h1>
        </div>
    </div>
    


    </div>
</div>
</body>

</html>