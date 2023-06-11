<?php
// Query Produk Berdasarkan kategori
    // Ambil queri produk kecantikan
    $users = userquery("SELECT * FROM pengguna");


    // Ketika tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $produk2 = cariprodukes($_POST["keyword"]);
}

?>
<!-- Sambut -->
    <section class="container-fluid" style="padding: 20px;">
      <div class="container">
        <div class="row board">
          <div class="text-center tron">
            <h2>Selamat Datang</h2>
          </div>
          <div class="text-center tron">
            <h3>Di Halaman Dashboard</h3>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>  
<!-- List Produk -->
    <section class="container-fluid">
      <div class="container">
        <div class="daprod">
        <div class="pembatas">
          <h3><i class="fa-solid fa-list"></i> Daftar Pengguna</h3>
        </div>
        <br>
        <div class="pencarian">
          <form action="" method="post">
            <input type="text" size="22" placeholder="Masukan Keyword.." autofocus autocomplete="off" name="keyword">
            <button type="submit" name="cari"><i class="fa-solid fa-magnifying-glass" style="color:#0b88d4;"></i></button>
          </form>
        </div>
        <br>
          <div class="table-responsive">
          <table class="table">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($users as $user): ?>
            <tr>
              <td scope="row"><?= $i ?></td>
              <td><?= $user['nama']; ?></td>
              <td><?= $user["username"]; ?></td>
              <td><?= $user["email"]; ?></td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
          </table>
          </div>
        </div>
      </div>
    </section>