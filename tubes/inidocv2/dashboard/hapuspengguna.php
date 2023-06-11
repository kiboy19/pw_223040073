<?php
require('../koneksi.php');

// Hapus data kesehatan
$id_pengguna = $_GET["id_pengguna"];

if( hapuspengguna($id_pengguna) > 0 ) {
  echo "
      <script>
          alert('Pengguna berhasil dihapus!');
          document.location = 'index.php';
      </script>
  ";
} else {
  echo "
      <script>
          alert('Pengguna gagal dihapus!');
          document.location = 'index.php';
      </script>
  ";
}
?>