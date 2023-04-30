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
        <a class="navbar-brand" href="index.php">
          <img src="img/inidoc.png" alt="Inidoc- Konsultasikan kesehatanmu" />
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Artikel</a>
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
    <!-- PRICING TABLE -->
    <section class="pricing">
      <div class="container">
        <div class="row">
          <div class="col text-center harga prices">
            <h4>Gratis</h4>
            <h4>Rp0<span class="periode">/Bulan</span></h4>
            <hr />
            <ul class="feature">
              <li><i class="fa-solid fa-square-check"></i> Konsultasi Kesehatan <span class="periode">(3x/sehari)</span></li>
              <li><i class="fa-solid fa-square-check"></i> Minta Resep Obat <span class="periode">(3x/sehari)</li>
              <li><i class="fa-solid fa-square-check"></i> Konsultasi Kandungan <span class="periode">(3x/sehari)</li>
              <li><i class="fa-solid fa-square-check"></i> Cek Kesehatan Mental <span class="periode">(3x/sehari)</li>
              <li><i class="fa-solid fa-square-check"></i> Cari RS Terdekat <span class="periode">(3x/sehari)</li>
              <li><i class="fa-solid fa-square-check"></i> Panggil Ambulan <span class="periode">(3x/sehari)</li>
              <li><i class="fa-solid fa-square-xmark"></i> Klaim BPJS</li>
              <li><i class="fa-solid fa-square-xmark"></i> Live chat Dokter Spesialis</li>
            </ul>
            <hr>
            <button class="btn bg-primary">Bergabung</button>
          </div>
          <div class="col text-center harga1 prices">
            <h4>Premium</h4>
            <h4>Rp250.000<span class="periode">/Bulan</span></h4>
            <hr />
            <ul class="feature">
                <li><i class="fa-solid fa-square-check"></i> Konsultasi Kesehatan <span class="periode">(20x/sehari)</span></li>
                <li><i class="fa-solid fa-square-check"></i> Minta Resep Obat <span class="periode">(20x/sehari)</li>
                <li><i class="fa-solid fa-square-check"></i> Konsultasi Kandungan <span class="periode">(20x/sehari)</li>
                <li><i class="fa-solid fa-square-check"></i> Cek Kesehatan Mental <span class="periode">(20x/sehari)</li>
                <li><i class="fa-solid fa-square-check"></i> Cari RS Terdekat <span class="periode">(20x/sehari)</li>
                <li><i class="fa-solid fa-square-check"></i> Panggil Ambulan <span class="periode">(20x/sehari)</li>
                <li><i class="fa-solid fa-square-check"></i> Klaim BPJS</li>
                <li><i class="fa-solid fa-square-xmark"></i> Live chat Dokter Spesialis</li>
              </ul>
              <hr>
              <button class="btn bg-primary">Bergabung</button>
          </div>
          <div class="col text-center harga2 prices">
            <h4>Professional</h4>
            <h4>Rp899.000<span class="periode">/Bulan</span></h4>
            <hr />
            <ul class="feature">
                <li><i class="fa-solid fa-square-check"></i> Konsultasi Kesehatan <span class="periode">(40x/sehari)</span></li>
                <li><i class="fa-solid fa-square-check"></i> Minta Resep Obat <span class="periode">(40x/sehari)</li>
                <li><i class="fa-solid fa-square-check"></i> Konsultasi Kandungan <span class="periode">(40x/sehari)</li>
                <li><i class="fa-solid fa-square-check"></i> Cek Kesehatan Mental <span class="periode">(40x/sehari)</li>
                <li><i class="fa-solid fa-square-check"></i> Cari RS Terdekat <span class="periode">(40x/sehari)</li>
                <li><i class="fa-solid fa-square-check"></i> Panggil Ambulan <span class="periode">(40x/sehari)</li>
                <li><i class="fa-solid fa-square-check"></i> Klaim BPJS</li>
                <li><i class="fa-solid fa-square-check"></i> Live chat Dokter Spesialis <span class="periode">(20x/sehari)</li>
              </ul>
              <hr>
              <button class="btn bg-primary">Bergabung</button>
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
