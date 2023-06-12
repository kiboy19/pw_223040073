<?php
require('../koneksi.php');

// Hapus data kesehatan
$id_produk = $_GET["id_produk"];

if( hapus($id_produk) > 0 ) {
  echo "
      <script>
          alert('data berhasil dihapus!');
          document.location = 'listproduk.php';
      </script>
  ";
} else {
  echo "
      <script>
          alert('data gagal dihapus!');
          document.location = 'listproduk.php';
      </script>
  ";
}
?>