<?php
// Query artikel

$artikels = query("SELECT * FROM artikel");
$articles = query("SELECT * FROM artikel");


?>
<!-- Artikel -->
    <section class="container-fluid article">
      <div class="container">
        <div class="news">
          <h4>Artikel Terbaru</h4>
        </div>
        <div class="row">
          <div class="headline">
            <div class="heading">
              <a href="detailartikel.php?id_artikel=1"><h2>Tips Mudah untuk Meningkatkan Kesehatan Fisik dan Mental Anda</h2></a>
            </div>
          </div>
          <div class="wrapper">
          <?php foreach ( $artikels as $artikel): ?>
            <div class="popular">
              <img src="img/<?= $artikel['gambar']; ?>" alt=""/>
              <a href="detailartikel.php?id_artikel=<?= $artikel["id_artikel"]; ?>"><h4><?= $artikel['judul']; ?></h4></a>
              <p>3 Menit</p>
            </div>
          <?php endforeach; ?>
          </div>
        </div>
      </div>
    </section>
    <!-- Artikel -->
    <br>
    <br>
    <br>
    <!-- Content artikel -->
    <section class="container-fluid" style="padding: 20px;">
        <div class="container">
          <div class="row">
          <?php foreach ($articles as $art): ?>
              <div class="dycard">
                <img src="img/<?= $art['gambar']; ?>" alt="" class="img-fluid">
                <br>
                <br>
                <h4><?= $art['judul']; ?></h4>
                <br>
                <button><a href="detailartikel.php?id_artikel=<?= $art["id_artikel"]; ?>">Baca selengkapnya</a></button>
              </div>
              <?php endforeach; ?>
          </div>
        </div>
      </section>