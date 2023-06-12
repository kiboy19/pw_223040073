<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inidoc - Konsultasikan Kesehatan Kamu Sekarang</title>
    <link rel="icon" type="image/x-icon" href="img/favico.png" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
  </head>
  <!-- HEADING SOURCE -->
<!-- SIGN FORM -->
<body class="badan">
<!-- SIGNUP FORM -->
    <section class="regist text-center">
      <div class="container">
        <div class="row register">
          <div class="pendaftaran">
            <h4>Halaman Pendaftaran</h4>
            <p>Daftarkan data diri anda terlebih dahulu, untuk melanjutkan.</p>
            <form action="#" method="POST">
              <div class="inputfield">
                <i class="fa-regular fa-user"></i>
                <input type="text" name="nama" placeholder="Masukan Nama" class="text-center" autofocus autocomplete="off" required/>
              </div>
              <br />
              <div class="inputfield">
                <i class="fa-regular fa-user"></i>
                <input type="text" name="username" placeholder="Masukan Usename" class="text-center" autocomplete="off" required/>
              </div>
              <br />
              <div class="inputfield">
                <i class="fa-regular fa-envelope"></i>
                <input type="email" name="email" placeholder="Masukan Email" class="text-center" autocomplete="off" required/>
              </div>
              <br />
              <div class="inputfield">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="password" placeholder="Masukan Kata Sandi" class="text-center" autocomplete="off" required/>
              </div>
              <br />
              <button type="submit" class="btn btn-primary" name="submit">Mendaftar</button>
            </form>
            <?php 
              if(isset($_POST['submit'])){
                include 'koneksi.php';

                $nama = htmlspecialchars($_POST['nama']);
                $username = htmlspecialchars($_POST['username']);
                $email = htmlspecialchars($_POST['email']);
                $password = htmlspecialchars($_POST['password']);
                
                $sql = "INSERT INTO `user`(`nama`, `username`, `email`, `password`) VALUES ('$nama', '$username', '$email', '$password')";
                if (mysqli_query($conn, $sql)) {
                  // Redirect ke halaman login.php setelah pendaftaran berhasil
                  header("Location: login.php");
                  exit;
                }else { 
                  echo '<script>alert("Mendaftar Gagal");</script>'; }
              } 
            ?>
          </div>
        </div>
      </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>