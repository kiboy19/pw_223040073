<?php
$id_produk = $_GET["id_produk"];

// Querry berdasarkan id

$produk = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];


// Cek apakah tombol submit sudah ditekan atau belum ?
if( isset($_POST["submit"]) ){

  // cek apakah data berhasil diubah atau tidak
  if( ubahprod($_POST) > 0 ) {
    echo "
    <script>
    alert('data berhasil diubah!');
    document.location.href= 'listproduk.php';
    </script>
    ";
  } else {
    echo "
    <script>
    alert('data gagal diubah');
    document.location.href = 'listproduk.php';
    </script>
    ";
  }
}

?>
 <!-- Tambah produk kecantikan -->
 <section class="container-fluid">
      <div class="container" style="padding: 30px">
        <div class="kotakheader text-center">
          <h2>Ubah Produk Kesehatan</h2>
        </div>
        <div class="kotakan">
          <form action="" method="post" class="form-control" enctype="multipart/form-data">
          <input type="hidden" name="id_produk" value="<?= $produk["id_produk"]; ?>">
          <input type="hidden" name="gambarLama" value="<?= $produk["gambar"]; ?>">
            <ul>
              <li>
                <label for="nama">Nama Produk</label><br />
                <input type="text" name="nama" id="nama" value="<?= $produk["nama"]; ?>" autofocus autocomplete="off" required/>
              </li>
              <li>
                <label for="deskripsi">Deskripsi</label><br />
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" autocomplete="off" required><?= $produk["deskripsi"]; ?></textarea>
              </li>
              <li>
                <label for="harga">Harga </label><br />
                <input type="text" name="harga" id="harga" value="<?= $produk["harga"]; ?>" autocomplete="off" required/>
              </li>
              <li>
                <label for="stok">Stok </label><br />
                <input type="text" name="stok" id="stok" value="<?= $produk["stok"]; ?>" autocomplete="off" required/>
              </li>
              <li>
                <label for="gambar">Gambar</label><br />
                <img src="../<?= $produk["gambar"]; ?>" alt="" style="width: 80px;">
                <input type="file" name="gambar" id="gambar" value="<?= $produk["gambar"]; ?>" autocomplete="off"/>
              </li>
              <li>
                <label for="id_kategori">Kategori</label><br />
                <input type="text" name="id_kategori" id="id_kategori" value="<?= $produk["id_kategori"]; ?>" autocomplete="off" required/>
              </li>
              <br />
              <li>
                <button type="submit" name="submit" class="btn btn-success">
                  Ubah Produk
                </button>
              </li>
            </ul>
          </form>
        </div>
      </div>
    </section>