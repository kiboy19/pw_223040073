<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Tubes
*/
?>
<?php
require '../php/function.php';

$keyword = $_GET['keyword'];;
$sepatu = query(
  "SELECT * FROM sepatu WHERE
      nama LIKE '%$keyword%' OR
      brand LIKE '%$keyword%' OR
      warna LIKE '%$keyword%' OR
      harga LIKE '%$keyword%' 
      "
);
?>
<table class="table row-border admin-container">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Picture</th>
      <th scope="col">Brand</th>
      <th scope="col">Name</th>
      <th scope="col">Color</th>
      <th scope="col">Price</th>
      <th scope="col">Opsi</th>
    </tr>
  </thead>
  <tbody>
    <?php if (empty($sepatu)) : ?>
      <tr>
        <th colspan="7">Data tidak di temukan</th>
      </tr>
    <?php else : ?>
      <?php $i = 1;
      foreach ($sepatu as $spt) :
      ?>
        <tr>
          <th scope="row"><?= $i ?></th>
          <td><img width="300px" src="../assets/img/<?= $spt["img"] ?>" alt="foto"></td>
          <td><?= $spt["brand"] ?> </td>
          <td><?= $spt["nama"] ?> </td>
          <td><?= $spt["warna"] ?> </td>
          <td>$<?= $spt["harga"] ?> </td>
          <td>
            <a href="ubah.php?id=<?= $spt["id"] ?>"><button class="button info outline">Edit</button></a>

            <a href="hapus.php?id=<?= $spt["id"] ?>" onclick="return confirm('Hapus Data??')"><button class="button warning outline">Delete</button></a>
          </td>
        </tr>
      <?php
        $i++;
      endforeach;
      ?>
    <?php endif; ?>
  </tbody>
</table>