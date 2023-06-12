 <!-- Tambah produk kecantikan -->
 <section class="container-fluid">
      <div class="container" style="padding: 30px">
        <div class="kotakheader text-center">
          <h2>Tambah Artikel</h2>
        </div>
        <div class="kotakan">
          <form action="" method="post" class="form-control" enctype="multipart/form-data">
            <ul>
              <li>
                <label for="judul">Judul Artikel</label><br />
                <input type="text" name="judul" id="judul" autofocus autocomplete="off" required/>
              </li>
              <li>
                <label for="deskripsi">Deskripsi</label><br />
                <textarea name="deskripsi" id="deskripsi" cols="40" rows="20" autocomplete="off" required></textarea>
              </li>
              <li>
                <label for="gambar">Upload Gambar</label><br />
                <input type="file" name="gambar" id="gambar" autocomplete="off" required/>
              </li>
              <br />
              <li>
                <button type="submit" name="submit" class="btn btn-success">
                  Tambah Produk
                </button>
              </li>
            </ul>
          </form>
          <?php 
              if(isset($_POST['submit'])){
                include '../koneksi.php';

                $judul = htmlspecialchars($_POST['judul']);
                $deskripsi= htmlspecialchars($_POST['deskripsi']);
                $gambar = uploadImage();
                
                $sql = "INSERT INTO `artikel`(`judul`, `deskripsi`, `gambar`) VALUES ('$judul', '$deskripsi', '$gambar')";
                if (mysqli_query($conn, $sql)) {
                  echo '<script>alert("Berhasil Menambahkan Produk")</script>';
                  // Redirect ke halaman login.php setelah pendaftaran berhasil
                  header("Location: listartikel.php");
                  exit;
                }else { 
                  echo '<script>alert("menambahkan produk gagal");</script>'; }
              } 
            ?>
        </div>
      </div>
    </section>