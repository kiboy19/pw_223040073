<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Tubes
*/


require 'function.php';

if (isset($_POST["register"])) {
    if (registrasi($_POST) > 0) {
        echo "<script>
        alert('Registrasi Berhasil');
        document.location.href='login.php';
        </script>";
    } else {
        echo "<script>
        alert('Registrasi Gagal');
        </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- MyCSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <!-- Icon -->
    <link rel="icon" href="../assets/img/logo-color.png">
    <title>Registrasi</title>
</head>

<body style="background-color: #f1d302ff;">
    <section class="registrasi">
        <div class="container">
            <div class="grid">
                <div class="row">
                    <div class="cell-4 form-registrasi">
                        <div class="title">
                            <p>Registrasi</p>
                        </div>
                        <form action="" method="post">
                            <div class="field">
                                <input type="text" name="username" required autocomplete="off" autofocus>
                                <label for="username">Username</label>
                            </div>
                            <div class="field">
                                <input type="password" name="password" required>
                                <label for="password">Password</label>
                            </div>

                            <button type="submit" name="register" class="button primary outline w-100">Register</button>
                            <a href="login.php" class="kembali ml-auto">Kembali!</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>