<?php
require('../koneksi.php');

// Hapus data kesehatan
$id_user = $_GET["id_user"];

if( hapusadmin($id_user) > 0 ) {
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