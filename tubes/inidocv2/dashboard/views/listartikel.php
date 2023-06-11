<?php
?>

<!-- Tambah Produk -->
    <section class="container-fluid">
      <div class="container">
        <div class="tamprod">
          <table border="0" cellpadding="20" cellspacing="2" style="width:20%; margin:auto;">
            <tr>
              <th class="ukuran">Tambah Artikel</th>
            </tr>
            <tr>
              <td><a href="tambahartikel.php" class="ukuran">Tambah</a></td>
            </tr>
          </table>
      </div>
    </section>

<!-- List Produk -->
    <section class="container-fluid">
      <div class="container">
        <div class="daprod">
        <div class="pembatas">
          <h3><i class="fa-solid fa-list"></i> Daftar Artikel</h3>
        </div>
        <br>
        <div class="search">
          <form action="" method="get">
            <input type="text" name="keyword" id="keyword" size="20" placeholder="Masukan Keyword.." autofocus autocomplete="off">
            <button type="submit" name="button-search" id="button-search"><i class="fa-solid fa-magnifying-glass" style="color:#0b88d4;"></i></button>
          </form>
        </div>
        <br>
        <div id="search-container">
        <?php if($artikels) : ?>
          <table class="table geserkan">
            <tr>
              <th scope="col" width="5">Id</th>
              <th scope="col width="30"">Judul</th>
              <th scope="col width="10"">Detail</th>
              <th scope="col width="10"">Edit</th>
              <th scope="col width="10"">Hapus</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($artikels as $artikel): ?>
            <tr>
              <td scope="row" width="5"><?= $i ?></td>
              <td width="30"><?= $artikel['judul']; ?></td>
              <td width="10"><a href="../detailartikel.php?id_artikel=<?= $artikel["id_artikel"]; ?>"><i class="fa-solid fa-eye"></i></a></td>
              <td width="10"><a href="ubahartikel.php?id_artikel=<?= $artikel["id_artikel"]; ?>"><i class="fa-solid fa-pen-to-square"></i></a></td>
              <td width="10"><a href="hapusartikel.php?id_artikel=<?= $artikel["id_artikel"]; ?>"><i class="fa-solid fa-trash-can"></i></a></td>
            </tr>
            <?php $i++?>
            <?php endforeach; ?>
          </table>
          <?php else : ?>
            <div class="row">
              <div class="col-md-6">
                <div class="alert alert-danger" role="alert">
                  Data Tidak Ditemukan
                </div>
              </div>
            </div>
          <?php endif; ?>
        </div>
        </div>
      </div>
    </section>