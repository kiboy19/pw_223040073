<?php
require('../koneksi.php');
if(isset($_GET['button-search'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM artikel
                    WHERE
                        judul LIKE '%$keyword%'
    ";
    $artikels = query($query);
} else {
    $artikels = query("SELECT * FROM artikel");
}
require('sesi.php');
require ('views/header.php');
require ('views/navbar.php');
require ('views/listartikel.php');
require ('views/footer.php');
?>
