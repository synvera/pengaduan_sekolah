<?php
session_start();

// Hapus semua data session
$_SESSION = [];

// Hancurin session
session_destroy();

// Redirect ke halaman login
header("Location: ../index.php");
exit;