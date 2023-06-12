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
    <section class="container-fluid regist text-center">
      <div class="container">
        <div class="row register">
          <div class="pendaftaran">
            <h4>Halaman Masuk</h4>
            <p>Silahkan masuk, untuk melanjutkan.</p>
            <form action="" method="POST">
              <div class="inputfield">
                <i class="fa-regular fa-envelope"></i>
                <input type="email" name="email" placeholder="Masukan Email" class="text-center" autocomplete="off" autofocus required/>
              </div>
              <br />
              <div class="inputfield">
                <i class="fa-solid fa-lock"></i>
                <input type="password" name="pass" placeholder="Masukan Kata Sandi" class="text-center" autocomplete="off" required/>
              </div>
              <br />
              <button type="submit" class="btn btn-success" name="submit">Masuk</button>
            </form>
            <?php 
              if(isset($_POST['submit'])){
                include 'koneksi.php';

                $email = $_POST['email'];
                $pass = $_POST['pass'];

                $cek = mysqli_query($conn, "SELECT * FROM user WHERE email = '".$email."' AND password = '".($pass)."'");
                if(mysqli_num_rows($cek) > 0) { 
                  $_SESSION["login"] = true;
                  echo '<script>alert("Berhasil Login");</script>'; 
                  echo '<script>window.location = "./dashboard/index.php";</script>';
                }else { 
                  echo '<script>alert("Login Gagal");</script>'; }
              } 
            ?>
            <br />
            <p>Belum punya akun ? <a href="register.php" style="text-decoration:none; color:white; font-weight:bold;">Daftar disini</a></p>
          </div>
        </div>
      </div>
    </section>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>