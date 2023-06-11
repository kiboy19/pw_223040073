<?php
$id_artikel = $_GET["id_artikel"];

$detartikel = query("SELECT * FROM artikel WHERE id_artikel = $id_artikel")[0];
?>
    <!-- ARTIKEL DETAIL -->
    <section class="container-fluid doit">
        <div class="container berartikel">
            <div class="row">
                <div class="col detailartikel">
                    <h2><?= $detartikel["judul"]; ?></h2>
                    <img src="img/<?= $detartikel["gambar"]; ?>" alt="" class="img-fluid">
                    <p>
                    <?= $detartikel["deskripsi"]; ?>
                    </p>
                </div>
                <div class="col popup">
                    <div class="titpop">
                        <h4>Popular Post</h4>
                    </div>
                    <div class="cardpop">
                        <img src="img/jantung.png" alt="">
                        <a href=""><h4>Menjaga Kesehatan Jantung dengan Pola Makan Sehat</h4></a>
                    </div>
                    <div class="cardpop">
                        <img src="img/imun.png" alt="">
                        <a href=""><h4>Membangun Sistem Kekebalan Tubuh yang Kuat dengan Asupan Nutrisi Tepat</h4></a>
                    </div>
                    <div class="cardpop">
                        <img src="img/cancer.png" alt="">
                        <a href=""><h4>Mencegah Kanker dengan Gaya Hidup Sehat dan Perubahan Pola Makan</h4></a>
                    </div>
                    <div class="cardpop">
                        <img src="img/mental.png" alt="">
                        <a href=""><h4>Menjaga Kesehatan Mental dengan Mengelola Stres</h4></a>
                    </div>
                    <div class="cardpop">
                        <img src="img/tidur.png" alt="">
                        <a href=""><h4>Mengoptimalkan Kualitas Tidur untuk Kesehatan yang Lebih Baik</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </section>