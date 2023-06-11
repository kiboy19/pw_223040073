<?php
// Query Produk Berdasarkan kategori
    // Ambil queri produk kecantikan
    $produk1 = query("SELECT * FROM produk where id_kategori = 2 ");
    // Ambil queri produk Kesehatan
    $produk2 = query("SELECT * FROM produk where id_kategori = 1 ");
    // Ambil queri produk Kebugaran
    $produk3 = query("SELECT * FROM produk where id_kategori = 3 ");


    // Ketika tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $produk2 = cariprodukes($_POST["keyword"]);
}

?>


<!-- List Produk -->
    <section class="container-fluid" style="padding: 20px;">
      <div class="container">
        <div class="daprod">
        <div class="pembatas">
          <h3><i class="fa-solid fa-list"></i> Produk Kesehatan</h3>
        </div>
        <br>
        <div class="print">
          <button class="btn bg-primary"><a href="../print.php" target="_blank" style="color: #fff; text-decoration: none;">Cetak Data</a></button>
        </div>
        <br>
          <div class="table-responsive">
          <table class="table">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Harga</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($produk2 as $prod2): ?>
            <tr>
              <td scope="row"><?= $i ?></td>
              <td><?= $prod2['nama']; ?></td>
              <td>IDR <?= $prod2["harga"]; ?></td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
          </table>
          </div>
          <br>
          <div class="pembatas">
          <h3><i class="fa-solid fa-list"></i> Produk Kecantikan</h3>
        </div>
          <br>
          <div class="print">
            <button class="btn bg-primary"><a href="../printkec.php" target="_blank" style="color: #fff; text-decoration: none;">Cetak Data</a></button>
          </div>
          <br>
          <div class="table-responsive">
          <table class="table">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Harga</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($produk1 as $prod1): ?>
            <tr>
              <td scope="row"><?= $i ?></td>
              <td><?= $prod1['nama']; ?></td>
              <td>IDR <?= $prod1["harga"]; ?></td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
          </table>
          </div>
          <br>
          <div class="pembatas">
          <h3><i class="fa-solid fa-list"></i> Produk Kebugaran</h3>
          </div>
          <br>
          <div class="print">
            <button class="btn bg-primary"><a href="../printkeb.php" target="_blank" style="color: #fff; text-decoration: none;">Cetak Data</a></button>
          </div>
          <br>
          <div class="table-responsive">
          <table class="table geserkan">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Harga</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($produk3 as $prod3): ?>
            <tr>
              <td scope="row"><?= $i ?></td>
              <td><?= $prod3['nama']; ?></td>
              <td>IDR <?= $prod3["harga"]; ?></td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
          </table>
          </div>
        </div>
      </div>
    </section>