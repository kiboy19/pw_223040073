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


<!-- Tambah Produk -->
    <section class="container-fluid">
      <div class="container">
        <div class="tamprod">
          <table border="0" cellpadding="20" cellspacing="2">
            <tr>
              <th class="ukuran">Tambah Produk</th>
            </tr>
            <tr>
              <td><a href="tambahproduk.php" class="ukuran">Tambah</a></td>
            </tr>
          </table>
      </div>
    </section>

<!-- List Produk -->
    <section class="container-fluid">
      <div class="container">
        <div class="daprod">
        <div class="pembatas">
          <h3><i class="fa-solid fa-list"></i> Produk Kesehatan</h3>
        </div>
        <br>
        <div class="pencarian">
          <form action="" method="post">
            <input type="text" size="22" placeholder="Masukan Keyword.." autofocus autocomplete="off" name="keyword">
            <button type="submit" name="cari"><i class="fa-solid fa-magnifying-glass" style="color:#0b88d4;"></i></button>
          </form>
        </div>
        <br>
          <table class="table">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Harga</th>
              <th scope="col">Edit</th>
              <th scope="col">Hapus</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($produk2 as $prod2): ?>
            <tr>
              <td scope="row"><?= $i ?></td>
              <td><?= $prod2['nama']; ?></td>
              <td>IDR <?= $prod2["harga"]; ?></td>
              <td><a href="ubahproduk.php?id_produk=<?= $prod2["id_produk"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
              <td><a href="hapus.php?id_produk=<?= $prod2["id_produk"]; ?>" onclick="return confirm('Anda yakin ingin menghapus produk ini ?')"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
          </table>
          <br>
          <div class="pembatas">
          <h3><i class="fa-solid fa-list"></i> Produk Kecantikan</h3>
        </div>
          <br>
          <tr></tr>
          <table class="table">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Harga</th>
              <th scope="col">Edit</th>
              <th scope="col">Hapus</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($produk1 as $prod1): ?>
            <tr>
              <td scope="row"><?= $i ?></td>
              <td><?= $prod1['nama']; ?></td>
              <td>IDR <?= $prod1["harga"]; ?></td>
              <td><a href="ubahproduk.php?id_produk=<?= $prod1["id_produk"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
              <td><a href="hapus.php?id_produk=<?= $prod1["id_produk"]; ?>" onclick="return confirm('Anda yakin ingin menghapus produk ini ?')"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
          </table>
          <br>
          <tr></tr>
          <div class="pembatas">
          <h3><i class="fa-solid fa-list"></i> Produk Kebugaran</h3>
          </div>
          <br>
          <table class="table geserkan">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Harga</th>
              <th scope="col">Edit</th>
              <th scope="col">Hapus</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($produk3 as $prod3): ?>
            <tr>
              <td scope="row"><?= $i ?></td>
              <td><?= $prod3['nama']; ?></td>
              <td>IDR <?= $prod3["harga"]; ?></td>
              <td><a href="ubahproduk.php?id_produk=<?= $prod3["id_produk"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
              <td><a href="hapus.php?id_produk=<?= $prod3["id_produk"]; ?>" onclick="return confirm('Anda yakin ingin menghapus produk ini ?')"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
    </section>