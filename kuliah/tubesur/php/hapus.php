<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Tubes
*/


session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}
// Menghubungkan dengan file php lainnya
require 'function.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
        alert('Data Berhasil dihapus!');
        document.location.href='admin.php';
        </script>";
} else {
    echo "<script>
        alert('Data Gagal dihapus!');
        document.location.href='admin.php';
        </script>";
}
