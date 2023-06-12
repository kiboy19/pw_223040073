<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Tubes
*/


// Koneksi ke Database
function koneksi()
{
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040065");
    // $conn = mysqli_connect("localhost", "root", "");
    // mysqli_select_db($conn, "pw_tubes_203040065");

    return $conn;
}

function query($sql)
{
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function upload()
{
    $nama_file = $_FILES['gambar']['name'];
    $tipe_file = $_FILES['gambar']['type'];
    $ukuran_file = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmp_file = $_FILES['gambar']['tmp_name'];

    // ketika tidak ada gambar yang di pilih
    if ($error == 4) {
        return 'nophoto.png';
    }
    // cek ekstensi file
    $daftar_gambar = ['jpg', 'jpeg', 'png'];
    $ekstensi_file = explode('.', $nama_file);
    $ekstensi_file = strtolower(end($ekstensi_file));

    if (!in_array($ekstensi_file, $daftar_gambar)) {
        echo "<script>
      alert('Yang anda pilih bukan gambar')
      </script>";
        return false;
    }

    // cek tipe file
    if ($tipe_file != 'image/jpeg' && $tipe_file != 'image/png') {
        echo "<script>
      alert('Yang anda pilih bukan gambar')
      </script>";
        return false;
    }

    // cek ukuran file{
    // maksimal 5Mb == 5000000
    if ($ukuran_file > 5000000) {
        echo "<script>
      alert('Ukuran terlalu besar')
      </script>";
        return false;
    }

    // lolos pengecekan 
    // siap upload file
    // generate nama file baru
    $nama_file_baru = uniqid();
    $nama_file_baru .= '.';
    $nama_file_baru .= $ekstensi_file;
    move_uploaded_file($tmp_file, '../assets/img/' . $nama_file_baru);

    return $nama_file_baru;
}

function tambah($data)
{
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $brand = htmlspecialchars($data['brand']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    // $gambar = htmlspecialchars($data['gambar']);
    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO sepatu VALUES
                (null,'$gambar','$nama','$brand','$warna','$harga')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();

    // menghapus gambar di folder image
    $spt = query("SELECT * FROM sepatu WHERE id = $id")[0];
    if ($spt['img'] != 'nophoto.png') {
        unlink('../assets/img/' . $spt["img"]);
    }


    mysqli_query($conn, "DELETE FROM sepatu WHERE id=$id");
    return mysqli_affected_rows($conn);
}


function ubah($data)
{
    $conn = koneksi();

    $id = htmlspecialchars($data['id']);
    $nama = htmlspecialchars($data['nama']);
    $brand = htmlspecialchars($data['brand']);
    $warna = htmlspecialchars($data['warna']);
    $harga = htmlspecialchars($data['harga']);
    $gambar_lama = htmlspecialchars($data['gambar_lama']);

    $gambar = upload();
    if (!$gambar) {
        return false;
    }

    if ($gambar == 'nophoto.png') {
        $gambar = $gambar_lama;
    }

    $query = "UPDATE sepatu SET
                img='$gambar',
                nama='$nama',
                brand='$brand',
                warna='$warna',
                harga='$harga'
                WHERE id = $id";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function registrasi($data)
{
    $conn = koneksi();
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);

    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username' ");
    if (mysqli_fetch_assoc($result)) {
        echo "<script>
        alert('Username sudah di gunakan');
        </script>";
        return false;
    }

    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);

    // tambah username baru
    $query_tambah = "INSERT INTO user VALUES (null,'$username','$password')";
    mysqli_query($conn, $query_tambah);

    return mysqli_affected_rows($conn);
}
