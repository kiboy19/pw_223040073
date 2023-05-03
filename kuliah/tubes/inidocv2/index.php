<?php  ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inidoc - Konsultasikan Kesehatan Kamu Sekarang</title>
    <link rel="icon" type="image/x-icon" href="img/favico.png" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>
  <body>
    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="img/inidoc.png" alt="Inidoc- Konsultasikan kesehatanmu" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="artikel.php">Artikel</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="pricing.php">Biaya</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="login.php">Masuk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active daftar" href="register.php">Daftar</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Landing Medical -->
    <section class="container-fluid kesehatan">
      <div class="container">
        <div class="row">
          <div class="col content">
            <h1>Konsultasikan Kesehatan</h1>
            <h1>Kamu</h1>
            <p>Kesehatan kamu sekarang adalah masa depan kamu!</p>
            <button class="tombol">Konsultasi Disini!</button>
          </div>
          <div class="col gambar">
            <img src="img/medical.png" alt="Medical Image" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
    <!-- Layanan -->
    <section class="container-fluid layanan">
      <div class="container text-center produk">
        <h2><span>Layanan Konsultasi</span></h2>
        <h2><b>Kami siap membantu selama 24/7H</b></h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col cards">
            <img src="img/dokter.webp" alt="" />
            <br />
            <br />
            <h4>Konsultasi Kesehatan</h4>
            <p>Dokter kami siap membantu kamu untuk konsultasikan terkait kesehatan kamu yang saat ini sedang dialami.</p>
            <hr />
            <a href="">Konsultasikan</a>
          </div>
          <div class="col cards">
            <img src="img/obat.png" alt="" />
            <br />
            <br />
            <h4>Resep Obat</h4>
            <p>Temukan dengan mudah resep obat terbaik untuk kesehatanmu. Konsultasikan dengan ahli kami sekarang juga.</p>
            <hr />
            <a href="">Minta Resep</a>
          </div>
          <div class="col cards">
            <img src="img/dokter1.webp" alt="" />
            <br />
            <br />
            <h4>Tes Covid-19</h4>
            <p>Tes Covid-19 cepat dan akurat. Dapatkan hasil tesmu dalam hitungan menit, dengan mudah. Terjangkau dan aman.</p>
            <hr />
            <a href="">Tes Covid-19</a>
          </div>
          <div class="col cards">
            <img src="img/dokter7.webp" alt="" />
            <br />
            <br />
            <h4>Psikolog</h4>
            <p>Jaga kesehatan mentalmu dengan cek kesehatan mental terbaik. Konsultasi dengan ahli kami sekarang juga.</p>
            <hr />
            <a href="">Checkup</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Dokter -->
    <section class="container-fluid doctor">
      <div class="container text-center produk">
        <h2><span>Dokter Spesialis</span></h2>
        <h2><b>Konsultasikan Kesehatan Kamu Bersama Kami</b></h2>
      </div>
      <div class="container stabil">
        <div class="row text-center">
          <div class="col kartu">
            <img src="img/doc1.jpg" alt="" />
            <div class="spesial1">
              <h4>Dr. Anderson James</h4>
              <p>Spesialis Jantung</p>
            </div>
            <ul class="hubungi">
              <li><i class="fa-solid fa-envelope"></i> Andersonjames@inidoc.tech</li>
              <li><i class="fa-solid fa-phone"></i> 08212238883</li>
            </ul>
          </div>
          <div class="col kartu">
            <img src="img/doc2.jpg" alt="" />
            <div class="spesial2">
              <h4>Dr. Julie Stephanie</h4>
              <p>Spesialis Kulit</p>
            </div>
            <ul class="hubungi">
              <li><i class="fa-solid fa-envelope"></i> Juliestephanie@inidoc.tech</li>
              <li><i class="fa-solid fa-phone"></i> 08212238884</li>
            </ul>
          </div>
          <div class="col kartu">
            <img src="img/doc3.jpg" alt="" />
            <div class="spesial3">
              <h4>Dr. Ryan Gerays</h4>
              <p>Psikologi</p>
            </div>
            <ul class="hubungi">
              <li><i class="fa-solid fa-envelope"></i> Ryangerays@inidoc.tech</li>
              <li><i class="fa-solid fa-phone"></i> 08212238885</li>
            </ul>
          </div>
          <div class="col kartu">
            <img src="img/doc4.jpg" alt="" />
            <div class="spesial4">
              <h4>Dr. Anatasya Helen</h4>
              <p>Spesialis Kandungan</p>
            </div>
            <ul class="hubungi">
              <li><i class="fa-solid fa-envelope"></i> Anatasyah@inidoc.tech</li>
              <li><i class="fa-solid fa-phone"></i> 08212238886</li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Penawaran Menarik -->
    <section class="container-fluid promo">
      <div class="container pd">
        <div class="penawaran">
          <h4>Penawaran menarik</h4>
        </div>
      </div>
      <div class="container text-center sale">
        <div class="row autoflex">
          <div class="col flexprom">
            <img src="img/promo1.png" alt="Promo 1" class="img-fluid" />
          </div>
          <div class="col flexprom">
            <img src="img/promo2.png" alt="Promo 2" class="img-fluid" />
          </div>
          <div class="col flexprom">
            <img src="img/promo3.png" alt="Promo 3" class="img-fluid" />
          </div>
        </div>
      </div>
    </section>
<!-- Footer -->
    <footer class="container-fluid">
      <div class="container atas">
        <div class="row">
          <div class="col list">
            <h4>kontak</h4>
            <p>Kamu tidak perlu khawatir, jika kamu memiliki pertanyaan terkait layanan, langsung saja hubungi kami disini.</p>
            <ul>
              <li><i class="fa-solid fa-location-dot" style="color: white"></i> Jl. Sukajadi No.12, Bandung</li>
              <li><i class="fa fa-phone" style="color: white"></i> 0821242222</li>
              <li><i class="fa-regular fa-envelope"></i> Admin@inidoc.tech</li>
            </ul>
          </div>
          <div class="col list">
            <h4>Dokter Spesialis</h4>
            <ul>
              <li>>> Dr. Anderson James</li>
              <li>>> Dr. Julie Stephanie</li>
              <li>>> Dr. Ryan Gerays</li>
              <li>>> Dr. Anatasya Helen</li>
              <li>>> Dr. Nick Sims</li>
              <li>>> Dr. Michael Loyd</li>
              <li>>> Dr. Julia Lindon</li>
              <li>>> Dr. Rendi Martin</li>
            </ul>
          </div>
          <div class="col list">
            <h4>Layanan Kami</h4>
            <ul>
              <li>>> Konsultasi Kesehatan</li>
              <li>>> Tes Covid-19</li>
              <li>>> Resep Obat</li>
              <li>>> Konsultasi Kesehatan Mental</li>
              <li>>> Cari Rumah Sakit Terdekat</li>
              <li>>> Panggil Ambulan</li>
              <li>>> Saran Dokter</li>
            </ul>
          </div>
        </div>
        <hr />
        <div class="copryright text-center">
          <p>Copyright ©2023 <b>Inidoc</b>. Design By <i class="fa fa-heart" style="color: red"></i> <b>Muhamad Ariel Septiadi</b></p>
        </div>
      </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>