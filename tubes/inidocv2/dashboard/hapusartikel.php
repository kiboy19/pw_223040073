<?php
require('../koneksi.php');

// Hapus data kesehatan
$id_artikel = $_GET["id_artikel"];

if( hapusartikel($id_artikel) > 0 ) {
  echo "
      <script>
          alert('Artikel berhasil dihapus!');
          document.location = 'listartikel.php';
      </script>
  ";
} else {
  echo "
      <script>
          alert('Artikel gagal dihapus!');
          document.location = 'listartikel.php';
      </script>
  ";
}
?>