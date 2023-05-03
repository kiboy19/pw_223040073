<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Konsultasi - Inidoc</title>
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
              <a class="nav-link active" href="#">Konsultasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="produk.php">Produk</a>
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
    <!-- Sambut -->
    <section class="container-fluid tasi">
      <div class="container board">
        <div class="row">
          <div class="col text-center tron">
            <h2>Konsultasi</h2>
          </div>
          <div class="col text-center tron">
            <h3>Admin</h3>
          </div>
        </div>
      </div>
      <div class="container konsul">
        <div class="col">
            <div class="chatting text-center">
                <h4>Chat Dokter Sekarang</h4>
                <p><i class='fa fa-circle' style="color: rgb(131, 255, 131)"></i> Dokter Sedang Online</p>
            </div>
            <div class="isichat">
                <div class="pesandoc">
                    <img src="../img/doc1.jpg" alt="gambar dokter">
                    <p>Halo, Ada yang bisa kami bantu ?</p>
                </div>
                <div class="penggunapesan">
                    <img src="../img/user.png" alt="Gambar User">
                    <p>Saya Mau Konsultasi Pak</p>
                </div>
                <div class="pesandoc down">
                    <img src="../img/doc1.jpg" alt="gambar dokter">
                    <p>Dengan Senang Hati, Beritahu saya apa masalah kamu ?</p>
                </div>
            </div>
            <div class="ketik text-center">
                <form action="" method="post">
                    <input type="text" placeholder="Ketikan Pesan Kamu">
                    <button type="submit">Kirim</button>
                </form>
            </div>
        </div>
      </div>
    </section>
    <!-- Konsultasi -->
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