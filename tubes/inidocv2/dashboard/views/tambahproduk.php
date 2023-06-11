 <!-- Tambah produk kecantikan -->
 <section class="container-fluid">
      <div class="container" style="padding: 30px">
        <div class="kotakheader text-center">
          <h2>Tambah Produk</h2>
        </div>
        <div class="kotakan">
          <form action="" method="post" class="form-control" enctype="multipart/form-data">
            <ul>
              <li>
                <label for="nama">Nama Produk</label><br />
                <input type="text" name="nama" id="nama" autofocus autocomplete="off" required/>
              </li>
              <li>
                <label for="deskripsi">Deskripsi</label><br />
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="15" autocomplete="off" required></textarea>
              </li>
              <li>
                <label for="harga">Harga</label><br />
                <input type="text" name="harga" id="harga" autocomplete="off" required/>
              </li>
              <li>
                <label for="stok">Stok</label><br />
                <input type="text" name="stok" id="stok" autocomplete="off" required/>
              </li>
              <li>
                <label for="gambar">Upload Gambar</label><br />
                <input type="file" name="gambar" id="gambar" autocomplete="off"/>
              </li>
              <li>
                <label for="id_kategori">Kategori</label><br />
                <input type="text" name="id_kategori" id="id_kategori" autocomplete="off" required/>
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

                $nama = htmlspecialchars($_POST['nama']);
                $deskripsi= htmlspecialchars($_POST['deskripsi']);
                $harga = htmlspecialchars($_POST['harga']);
                $stok = htmlspecialchars($_POST['stok']);
                $gambar = uploadImage();
                $id_kategori = htmlspecialchars($_POST['id_kategori']);
                
                $sql = "INSERT INTO `produk`(`nama`, `deskripsi`, `harga`, `stok`, `gambar`, `id_kategori`) VALUES ('$nama', '$deskripsi', '$harga', '$stok', '$gambar', '$id_kategori')";
                if (mysqli_query($conn, $sql)) {
                  echo '<script>alert("Berhasil Menambahkan Produk")</script>';
                  // Redirect ke halaman login.php setelah pendaftaran berhasil
                  header("Location: listproduk.php");
                  exit;
                }else { 
                  echo '<script>alert("menambahkan produk gagal");</script>'; }
              } 

            ?>
        </div>
      </div>
    </section>