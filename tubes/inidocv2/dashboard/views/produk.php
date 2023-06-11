<?php
// Query Produk Berdasarkan kategori
    // Ambil queri produk kecantikan
    $produk1 = query("SELECT * FROM produk where id_kategori = 2 ");
    // Ambil queri produk Kesehatan
    $produk2 = query("SELECT * FROM produk where id_kategori = 1 ");
    // Ambil queri produk Kebugaran
    $produk3 = query("SELECT * FROM produk where id_kategori = 3 ");
?>

<section class="container-fluid" style="padding: 20px;">
      <div class="container" style="padding: 100px;">
        <div class="namprod text-center">
          <h2>Produk</h2>
        </div>
        <div class="pembatas">
          <h3>Kecantikan</h3>
        </div>
        <div class="row">
          <?php foreach ($produk1 as $prod1): ?>
            <div class="medicine">
            <img src="../img/<?php echo $prod1["gambar"]; ?>" alt=""/>
            <h4><?php echo $prod1["nama"]; ?></h4>
            <button class="btn bg-light"><a href="detailproduk.php?id_produk=<?= $prod1["id_produk"]; ?>">Detail Produk</a></button>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="pembatas">
          <h3>Kesehatan</h3>
        </div>
        <div class="row">
        <?php foreach ($produk2 as $prod2): ?>
          <div class="medicine">
            <img src="../img/<?php echo $prod2["gambar"]; ?>" alt="Vitamin C" />
            <h4><?php echo $prod2["nama"]; ?></h4>
            <button class="btn bg-light"><a href="detailproduk.php?id_produk=<?= $prod2["id_produk"]; ?>">Detail Produk</a></button>
          </div>
        <?php endforeach; ?>
        </div>
        <div class="pembatas">
          <h3>Kebugaran</h3>
        </div>
        <div class="row">
        <?php foreach ($produk3 as $prod3): ?>
          <div class="medicine">
            <img src="../img/<?php echo $prod3["gambar"]; ?>" alt="" />
            <h4><?php echo $prod3["nama"]; ?></h4>
            <button class="btn bg-light"><a href="detailproduk.php?id_produk=<?= $prod3["id_produk"]; ?>">Detail Produk</a></button>
          </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>