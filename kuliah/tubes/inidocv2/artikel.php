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
              <a class="nav-link active" href="#artikel">Artikel</a>
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
    <!-- Artikel -->
    <section class="container-fluid article">
      <div class="container">
        <div class="news">
          <h4>Artikel Terbaru</h4>
        </div>
        <div class="row respon">
          <div class="col headline">
            <div class="heading">
              <a href="artikel/meningkatkan-kesehatan-fisik.php"><h2>Tips Mudah untuk Meningkatkan Kesehatan Fisik dan Mental Anda</h2></a>
            </div>
          </div>
          <div class="col wrapper">
            <div class="popular">
              <img src="img/jantung.png" alt="Kesehatan Jantung" />
              <a href=""><h4>Menjaga Kesehatan Jantung dengan Pola Makan Sehat</h4></a>
              <p>3 Menit</p>
            </div>
            <div class="popular">
              <img src="img/imun.png" alt="Kekebalan Imun Tubuh" />
              <a href=""><h4>Membangun Sistem Kekebalan Tubuh yang Kuat dengan Asupan Nutrisi Tepat</h4></a>
              <p>3 Menit</p>
            </div>
            <div class="popular">
              <img src="img/cancer.png" alt="Mencegah Kanker" />
              <a href=""><h4>Mencegah Kanker dengan Gaya Hidup Sehat dan Perubahan Pola Makan</h4></a>
              <p>3 Menit</p>
            </div>
            <div class="popular">
              <img src="img/mental.png" alt="Kesehatan Mental" />
              <a href=""><h4>Menjaga Kesehatan Mental dengan Mengelola Stres</h4></a>
              <p>3 Menit</p>
            </div>
            <div class="popular">
              <img src="img/tidur.png" alt="Kualitas Tidur" />
              <a href=""><h4>Mengoptimalkan Kualitas Tidur untuk Kesehatan yang Lebih Baik</h4></a>
              <p>3 Menit</p>
            </div>
            <div class="popular">
              <img src="img/berat.png" alt="Kebiasan Hidup Sehat" />
              <a href=""><h4>Membangun Kebiasaan Hidup Sehat: Menjaga Berat Badan Ideal dan Menghindari Penyakit Metabolik</h4></a>
              <p>3 Menit</p>
            </div>
            <div class="popular">
              <img src="img/mata.png" alt="Kesehatan Mata" />
              <a href=""><h4>"Menjaga Kesehatan Mata: Tips untuk Menghindari Gangguan Mata</h4></a>
              <p>3 Menit</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Artikel -->
    <!-- Artikel Terbaru -->
    <section class="container-fluid blog">
      <div class="container">
        <h4>Artikel Terbaru</h4>
        <div class="row">
          <div class="col update">
            <img src="img/jenissport.png" alt="" />
            <div class="title">
              <a href=""><h4>Mengenal Jenis-Jenis Olahraga yang Baik untuk Kesehatan Tubuh</h4></a>
              <p class="kategori">Tips</p>
              <p></p>
            </div>
          </div>
          <div class="col update">
            <img src="img/jantung.png" alt="" />
            <div class="title">
              <a href=""><h4>Menjaga Kesehatan Jantung dengan Pola Makan Sehat</h4></a>
              <p class="kategori">Kesehatan</p>
              <p></p>
            </div>
          </div>
          <div class="col update">
            <img src="img/imun.png" alt="" />
            <div class="title">
              <a href=""><h4>Membangun Sistem Kekebalan Tubuh yang Kuat dengan Asupan Nutrisi Tepat</h4></a>
              <p class="kategori">Tips</p>
              <p></p>
            </div>
          </div>
          <div class="col update">
            <img src="img/cancer.png" alt="" />
            <div class="title">
             <a href=""> <h4>Mencegah Kanker dengan Gaya Hidup Sehat dan Perubahan Pola Makan</h4></a>
              <p class="kategori">Tips</p>
              <p></p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col update">
            <img src="img/mental.png" alt="" />
            <div class="title">
              <a href=""><h4>Menjaga Kesehatan Mental dengan Mengelola Stres</h4></a>
              <p class="kategori">Kesehatan</p>
              <p></p>
            </div>
          </div>
          <div class="col update">
            <img src="img/tidur.png" alt="" />
            <div class="title">
              <a href=""><h4>Mengoptimalkan Kualitas Tidur untuk Kesehatan yang Lebih Baik</h4></a>
              <p class="kategori">Tips</p>
              <p></p>
            </div>
          </div>
          <div class="col update">
            <img src="img/berat.png" alt="" />
            <div class="title">
              <a href=""><h4>Membangun Kebiasaan Hidup Sehat: Menjaga Berat Badan Ideal dan Menghindari Penyakit Metabolik</h4></a>
              <p class="kategori">Tips</p>
              <p></p>
            </div>
          </div>
          <div class="col update">
            <img src="img/cedera.png" alt="" />
            <div class="title">
              <a href=""><h4>Mengurangi Risiko Cedera Olahraga dengan Pemanasan yang Tepat</h4></a>
              <p class="kategori">Kesehatan</p>
              <p></p>
            </div>
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
