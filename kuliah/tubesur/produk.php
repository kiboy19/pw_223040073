<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00


Tubes
*/


// Menghubungkan dengan file php lainya
require 'php/function.php';


if (isset($_GET['keyword'])) {
  $keyword = $_GET['keyword'];
  $brand = ucwords($keyword);
  $sepatu = query(
    "SELECT * FROM sepatu WHERE
      brand LIKE '%$keyword%'
      "
  );
} else {
  $sepatu = query("SELECT * FROM sepatu");
  $brand = 'All Product';
}

if (isset($_GET['cari-produk'])) {
  $keyword = $_GET['keyword-cari'];
  $sepatu = query(
    "SELECT * FROM sepatu WHERE
      nama LIKE '%$keyword%' OR
      brand LIKE '%$keyword%' OR
      warna LIKE '%$keyword%' OR
      harga LIKE '%$keyword%' 
      "
  );
  $brand = 'Result For "' . strtoupper($keyword) . '"';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <!-- My CSS -->
  <link rel="stylesheet" href="css/style.css">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <!-- Metro 4 -->
  <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
  <!-- Animate.css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />




  <link rel="icon" href="assets/img/logo-color.png">
  <title>XRaa : Place to Buy Your Dream Shoes</title>
</head>

<body>
  <!-- NavBar -->
  <?php include('element/header.php'); ?>

  <div class="post">
    <img src="assets/img/art.png" alt="" style="width : 100%">
  </div>

  <section class="more-product list-product">
    <div class="container">

      <div class="grid">
        <div class="row">
          <div class="cell-md-4">
            <h2 class="udl"><?= $brand; ?></h2>
          </div>
          <!-- Cari -->
          <div class="cell-6 offset-2">
            <form action="" method="get">
              <input type="text" name="keyword-cari" class=" keyword" placeholder="Cari disini.." data-role="input" autofocus>
              <button type="submit" name="cari-produk" class="button secondary outline tombol-cari-produk"><i class="fas fa-search"></i></button>
            </form>
          </div>
          <!-- Akhir cari -->
        </div>
        <div class="row">
          <?php
          foreach ($sepatu as $spt) :
          ?>
            <div class="cell-md-3">
              <a href="php/detail.php?id=<?= $spt["id"] ?>">
                <div class="card">
                  <div class="card-header">
                    <img style="width: 100%;" src="assets/img/<?= $spt['img'] ?>">
                  </div>
                  <div class="card-content p-2 text-center">
                    <?= $spt["nama"] ?>
                  </div>
                  <div class="card-content harga text-center">
                    $<?= $spt["harga"] ?>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <?php include('element/footer.php'); ?>
  <!-- fontawesome icon -->
  <script src="https://kit.fontawesome.com/6dd84d01cb.js" crossorigin="anonymous"></script>
  <!-- My Script -->
  <script src="js/script.js"></script>
  <!-- Metro - 4 -->
  <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>