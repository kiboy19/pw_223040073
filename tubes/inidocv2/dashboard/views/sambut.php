<?php
// Query Produk Berdasarkan kategori
    // Ambil queri produk kecantikan
    $users = query("SELECT * FROM user");
    $penggunas = query("SELECT * FROM pengguna");



    // Ketika tombol cari ditekan
if( isset($_POST["cari"]) ) {
  $produk2 = cariprodukes($_POST["keyword"]);
}

?>
<!-- Sambut -->
    <section class="container-fluid">
      <div class="container board">
        <div class="row">
          <div class="col text-center tron">
            <h2>Selamat Datang</h2>
          </div>
          <div class="col text-center tron">
            <h3>Di Halaman Dashboard</h3>
          </div>
        </div>
      </div>
    </section>
    <br>
    <br>  
<!-- List Admin -->
    <section class="container-fluid">
      <div class="container">
        <div class="daprod">
          <div class="pembatas">
            <h3><i class="fa-solid fa-list"></i> Daftar Admin</h3>
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
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Hapus</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($users as $user): ?>
            <tr>
              <td scope="row"><?= $i ?></td>
              <td><?= $user['nama']; ?></td>
              <td><?= $user["username"]; ?></td>
              <td><?= $user["email"]; ?></td>
              <td><a href="hapusadmin.php?id_user=<?= $user["id_user"]; ?>"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
          </table>
        </div>
      </div>
<!-- List Pengguna -->
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
          <table class="table">
            <tr>
              <th scope="col">Id</th>
              <th scope="col">Nama</th>
              <th scope="col">Username</th>
              <th scope="col">Email</th>
              <th scope="col">Hapus</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($penggunas as $pengguna): ?>
            <tr>
              <td scope="row"><?= $i ?></td>
              <td><?= $pengguna['nama']; ?></td>
              <td><?= $pengguna["username"]; ?></td>
              <td><?= $pengguna["email"]; ?></td>
              <td><a href="hapuspengguna.php?id_pengguna=<?= $pengguna["id_pengguna"]; ?>"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
          </table>
        </div>
      </div>