<?php 
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'db_inidoc';
    $user = 'user';
    $pw = 'antijebol19';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die ('Gagal terhubung ke database');
    $userconn = mysqli_connect($hostname, $user, $pw, $dbname) or die ('Gagal terhubung ke database');
   



    // Ambil queri
    $result = mysqli_query($conn, "SELECT * FROM user");



    // fungsi querry admin
    function query ($query){
        global $conn;
        $hasil =  mysqli_query($conn, $query);
        $baris = [];
        while( $bari = mysqli_fetch_assoc($hasil) ) {
            $baris[] = $bari;
        }
        return $baris;
    }

    // fungsi querry user
    function userquery ($query){
        global $userconn;
        $hasil =  mysqli_query($userconn, $query);
        $baris = [];
        while( $bari = mysqli_fetch_assoc($hasil) ) {
            $baris[] = $bari;
        }
        return $baris;
    }

    

    // fungsi cari Artikel
    function cari($kataKunci) {
        $query = "SELECT * FROM artikel 
        WHERE 
        'judul' = '$kataKunci'
        ";
        return query($query);
    }

    // fungsi cari produkes
    function cariprodukes($keyword) {
        $query = "SELECT * FROM produk 
        WHERE 
        'nama' = '%$keyword%'
        ";
        return query($query);
    }

    // funsi ubah produk
    function ubahprod($dataprod){
        global $conn;
        $id_produk = ($_POST['id_produk']);
        $nama = htmlspecialchars($_POST['nama']);
        $deskripsi= htmlspecialchars($_POST['deskripsi']);
        $harga = htmlspecialchars($_POST['harga']);
        $stok = htmlspecialchars($_POST['stok']);
        $gambarLama = htmlspecialchars($_POST['gambarLama']);
        // cek apakah user menambahkan gambar baru atau tidak ?
        if( $_FILES['gambar']['error'] === 4 ) {
            $gambar = $gambarLama;
        } else {
            $gambar = uploadImage();
        }
        
        $id_kategori = htmlspecialchars($_POST['id_kategori']);

        $query = "UPDATE produk SET
        nama = '$nama',
        deskripsi = '$deskripsi',
        harga = '$harga',
        stok = '$stok',
        gambar = '$gambar',
        id_kategori = '$id_kategori'
        WHERE id_produk = $id_produk
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

       // funsi ubah artikel
       function ubahartikel($dataartikel){
        global $conn;
        $id_artikel = ($_POST['id_artikel']);
        $judul = htmlspecialchars($_POST['judul']);
        $deskripsi= htmlspecialchars($_POST['deskripsi']);
        $gambarLama= htmlspecialchars($_POST['gambarLama']);

        // cek apakah user pilih gambar baru atau tidak
        if( $_FILES['gambar']['error'] === 4 ){
            $gambar = $gambarLama;
        } else {
            $gambar = uploadImage();
        }
       

        $query = "UPDATE artikel SET
        judul = '$judul',
        deskripsi = '$deskripsi',
        gambar = '$gambar'
        WHERE id_artikel = $id_artikel
        ";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    // Fungsi Hapus admin
    function hapusadmin ($id_user) {
        global $conn;
        mysqli_query($conn, "DELETE FROM user WHERE id_user = $id_user");
        return mysqli_affected_rows($conn);
    }

    // Fungsi Hapus Pengguna
    function hapuspengguna ($id_pengguna) {
        global $conn;
        mysqli_query($conn, "DELETE FROM pengguna WHERE id_pengguna = $id_pengguna");
        return mysqli_affected_rows($conn);
    }
    // Fungsi Hapus Produk
    function hapus ($id_produk) {
        global $conn;
        mysqli_query($conn, "DELETE FROM produk WHERE id_produk = $id_produk");
        return mysqli_affected_rows($conn);
    }
    // Fungsi Hapus Artikel
    function hapusartikel ($id_artikel) {
        global $conn;
        mysqli_query($conn, "DELETE FROM artikel WHERE id_artikel = $id_artikel");
        return mysqli_affected_rows($conn);
    }

    //fungsi upload
    function uploadImage()
    {
      $imageName = $_FILES['gambar']['name'];
      $imageSize = $_FILES['gambar']['size'];
      $error = $_FILES['gambar']['error'];
      $tmpName = $_FILES['gambar']['tmp_name'];
    
    
      if ($error === 4) {
        echo "<script>alert('Insert an image!');</script>";
        return false;
      }
    
    
      if ($imageSize > 50000000 || $error === 1) {
        echo "<script>alert('Image is too big');</script>";
        return false;
      }
    
      if ($error !== 0) {
        echo "<script>alert('Failed to upload an image!');</script>";
        return false;
      }
    
      $validExtention = ['jpg', 'jpeg', 'png', 'webp'];
      $imageExtention = explode('.', $imageName);
      $imageExtention = strtolower(end($imageExtention));
      if (!in_array($imageExtention, $validExtention)) {
        echo "<script>alert('Not an image!');</script>";
        return false;
      }
    
    
    
      $newImageName = uniqid();
      $newImageName .= '.';
      $newImageName .= $imageExtention;
    
    
      move_uploaded_file($tmpName, '../img/' . $newImageName);
      return $newImageName;
    }
?>