<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard - Inidoc</title>
    <link rel="icon" type="image/x-icon" href="../img/favico.png" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="../css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>
  <body>
    <!-- Navigasi -->
    <!-- Navigasi Bar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="../img/inidoc.png" alt="Inidoc- Konsultasikan kesehatanmu" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="dashboard.php">Dashboard</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="konsultasi.php">Konsultasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Produk</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="#">Profile</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active daftar" href="#">Upgrade</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <section class="container-fluid halprod">
      <div class="container prdks">
        <div class="namprod text-center">
          <h2>Produk</h2>
        </div>
        <div class="pembatas">
          <h3>Kecantikan</h3>
        </div>
        <div class="row">
          <div class="col medicine">
            <img src="/img/scarlet.png" alt="" />
            <h4>Scarlet Brightly Serum New</h4>
            <button class="btn bg-light"><a href="produk/scarlet-brightly-serum.php">Beli Sekarang</a></button>
          </div>
          <div class="col medicine">
            <img src="/img/scarlet1.png" alt="" />
            <h4>Scarlet Brightly Day Cream</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
          </div>
          <div class="col medicine">
            <img src="/img/scarlet2.png" alt="" />
            <h4>Scarlet Brightly Face Toner</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
          </div>
          <div class="col medicine">
            <img src="/img/scarlet3.png" alt="" />
            <h4>Scarlet Brightly Face Wash</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
          </div>
        </div>
        <div class="pembatas">
          <h3>Kesehatan</h3>
        </div>
        <div class="row">
          <div class="col medicine">
            <img src="/img/vitc.png" alt="Vitamin C" />
            <h4>Vitamin C</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
          </div>
          <div class="col medicine">
            <img src="/img/antimo.png" alt="Antimo" />
            <h4>Antimo</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
          </div>
          <div class="col medicine">
            <img src="/img/tolakangin.png" alt="Tolak Angin" />
            <h4>Tolak Angin</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
          </div>
          <div class="col medicine">
            <img src="/img/komik.png" alt="Komik" />
            <h4>Komik Herbal</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
          </div>
        </div>
        <div class="pembatas">
          <h3>Kebugaran</h3>
        </div>
        <div class="row">
          <div class="col medicine">
            <img src="/img/sport.jpg" alt="" />
            <h4>Tali Skipping</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
          </div>
          <div class="col medicine">
            <img src="/img/sport1.jpg" alt="" />
            <h4>Resistance Tube</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
          </div>
          <div class="col medicine">
            <img src="/img/sport2.jpg" alt="" />
            <h4>Spring Chest</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
          </div>
          <div class="col medicine">
            <img src="/img/sport3.jpg" alt="" />
            <h4>Treadmil Portable</h4>
            <button class="btn bg-light"><a href="">Beli Sekarang</a></button>
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
