<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>SB Admin 2 - Input Aspirasi</title>
    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">
</head>
<style>
    body {
        background: #0f172a;
        font-family: 'Poppins', sans-serif;
    }

    /* Card */
    .card {
        border: none;
        border-radius: 16px;
        background: #1e293b;
        color: #e2e8f0;
    }

    /* Title */
    h1 {
        color: #e2e8f0;
    }

    /* Label */
    .form-group label {
        font-weight: 600;
        color: #cbd5f5;
    }

    /* Input */
    .form-control {
        background: #0f172a;
        border: 1px solid #334155;
        color: #e2e8f0;
        border-radius: 10px;
    }

    .form-control:focus {
        border-color: #00c4ff;
        box-shadow: 0 0 0 0.2rem rgba(0,196,255,0.2);
        background: #0f172a;
        color: #fff;
    }

    /* Select */
    select.form-control {
        cursor: pointer;
    }

    /* Button */
    .btn-primary {
        background: linear-gradient(135deg, #00c4ff, #3b82f6);
        border: none;
        border-radius: 10px;
        padding: 10px 20px;
        font-weight: 600;
    }

    .btn-primary:hover {
        opacity: 0.9;
    }

    /* Card Shadow Glow */
    .card {
        box-shadow: 0 0 25px rgba(0,196,255,0.1);
    }

    /* Topbar */
    .topbar {
        border-radius: 0 0 15px 15px;
    }
    .parent {
        display: grid;
        grid-template-columns: repeat(5, 1fr);
        grid-template-rows: repeat(5, 1fr);
        grid-column-gap: 0px;
        grid-row-gap: 0px;
    }

    .div1 { grid-area: 1 / 1 / 4 / 5; }
    .div2 { grid-area: 1 / 5 / 4 / 6; }
    .div3 { grid-area: 4 / 1 / 6 / 3; }
    .div4 { grid-area: 4 / 3 / 6 / 4; }
    .div5 { grid-area: 4 / 4 / 6 / 6; }
</style>
<body id="page-top">

<div id="wrapper">

    <?php include '../components/sidebar-siswa.php'; ?>

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

    <div class="parent">
        <div class="div1"> </div>
        <div class="div2"> </div>
        <div class="div3"> </div>
        <div class="div4"> </div>
        <div class="div5"> </div>
    </div>

        <?php include '../components/footer-siswa.php'; ?>

    </div>
    <!-- End content-wrapper -->

</div>

</html>