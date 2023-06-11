<?php
?>
<!-- List Produk -->
    <section class="container-fluid" style="padding: 20px;">
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
        <div class="print">
            <button class="btn bg-primary"><a href="../artprint.php" target="_blank" style="color: #fff; text-decoration: none;">Cetak Data</a></button>
          </div>
          <br>
        <div id="search-container">
       <div class="table-responsive">
       <?php if($artikels) : ?>
          <table class="table geserkan">
            <tr>
              <th scope="col" width="5">Id</th>
              <th scope="col width="30"">Judul</th>
              <th scope="col width="10"">Detail</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach ($artikels as $artikel): ?>
            <tr>
              <td scope="row" width="5"><?= $i ?></td>
              <td width="30"><?= $artikel['judul']; ?></td>
              <td width="10"><a href="../detailartikel.php?id_artikel=<?= $artikel["id_artikel"]; ?>"><i class="fa-solid fa-eye"></i></a></td>
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
      </div>
    </section>