<?php 
require('../koneksi.php');
$keyword = $_GET['keyword'];
$query = "SELECT * FROM artikel
            WHERE
                judul LIKE '%$keyword%'
    ";
    $artikels = query($query);

?>
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