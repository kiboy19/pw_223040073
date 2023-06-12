<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Tubes
*/


session_start();
require 'function.php';

// cek cookie
if (isset($_COOKIE['username']) && isset($_COOKIE['hash'])) {
    $username = $_COOKIE['username'];
    $hash = $_COOKIE['hash'];

    // ambil username berdasarkan id
    $result = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username'");
    $row = mysqli_fetch_assoc($result);

    if ($hash === hash('sha256', $row['id'], false)) {
        $_SESSION['username'] = $row['username'];
        header("Location: admin.php");
        exit;
    }
}

// Melakukan pengecekan apakah user sudah login
if (isset($_SESSION['username'])) {
    header("Location: admin.php");
    exit;
}

// Login
if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cek_user = mysqli_query(koneksi(), "SELECT * FROM user WHERE username = '$username' ");
    // mencocokan USERNAME dan PASSWORD
    if (mysqli_num_rows($cek_user) > 0) {
        $row = mysqli_fetch_assoc($cek_user);
        if (password_verify($password, $row['password'])) {
            $_SESSION['username'] = $_POST['username'];
            $_SESSION['hash'] = hash('sha256', $row['id'], false);

            // jika remember me dicentang
            if (isset($_POST['remember'])) {
                setcookie('username', $row['username'], time() + 60 * 60 * 24);
                $hash = hash('sha256', $row['id'], false);
            }

            if (hash('sha256', $row['id']) == $_SESSION['hash']) {
                header("Location: admin.php");
                die;
            }

            header("Location: ../index.php");
            die;
        }
    }
    $error = true;
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
    <title>Admin Login</title>
</head>

<body style="background-color: #f1d302ff;">
    <section class="login">
        <div class="container">
            <div class="grid">
                <div class="row">
                    <div class="cell-4 form-login">
                        <div class="title">
                            <p>Login</p>
                        </div>
                        <form action="" method="post">
                            <?php if (isset($error)) : ?>
                                <p style="color: red; font-style:italic;">Username atau Password salah</p>
                            <?php endif; ?>
                            <div class="field">
                                <input type="text" name="username" autocomplete="off" required autofocus>
                                <label for="username">Username</label>
                            </div>
                            <div class="field">
                                <input type="password" name="password" required>
                                <label for="password">Password</label>
                            </div>
                            <div class="remember">
                                <input type="checkbox" name="remember">
                                <label for="remember">Remember me</label>
                            </div>

                            <button type="submit" name="submit" class="button primary outline w-100">Login</button>
                        </form>
                        <div class="registrasi">
                            <p>Belum punya akun? Registrasi <a href="registrasi.php">Disini</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
</body>

</html>