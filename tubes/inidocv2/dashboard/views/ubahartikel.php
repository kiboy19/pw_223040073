<?php
$id_artikel = $_GET["id_artikel"];

// Querry berdasarkan id

$artikel = query("SELECT * FROM artikel WHERE id_artikel = $id_artikel")[0];


// Cek apakah tombol submit sudah ditekan atau belum ?
if( isset($_POST["submit"]) ){

  // cek apakah data berhasil diubah atau tidak
  if( ubahartikel($_POST) > 0 ) {
    echo "
    <script>
    alert('Artikel berhasil diubah!');
    document.location.href= 'listartikel.php';
    </script>
    ";
  } else {
    echo "
    <script>
    alert('Artikel gagal diubah');
    document.location.href = 'listartikel.php';
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
          <input type="hidden" name="id_artikel" value="<?= $artikel["id_artikel"]; ?>">
          <input type="hidden" name="gambarLama" value="<?= $artikel["gambar"]; ?>">
            <ul>
              <li>
                <label for="judul">Judul</label><br />
                <input type="text" name="judul" id="judul" value="<?= $artikel["judul"]; ?>" autofocus autocomplete="off" required/>
              </li>
              <li>
                <label for="deskripsi">Deskripsi</label><br />
                <textarea name="deskripsi" id="deskripsi" cols="30" rows="10" autocomplete="off" required><?= $artikel["deskripsi"]; ?></textarea>
              </li>
              <li>
                <label for="gambar">Gambar</label><br />
                <img src="../img/<?= $artikel["gambar"]; ?>" alt="" style="width:80px;">
                <br>
                <input type="file" name="gambar" id="gambar" value="<?= $artikel["gambar"]; ?>" autocomplete="off"/>
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