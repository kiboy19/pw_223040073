<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00

Tubes
*/


session_start();

if (!isset($_SESSION["username"])) {
    header("Location: login.php");
    exit;
}

// Menghubungkan dengan file php lainya
require 'function.php';
//melakukan query
if (isset($_GET['cari'])) {
    $keyword = $_GET['keyword'];;
    $sepatu = query(
        "SELECT * FROM sepatu WHERE
        nama LIKE '%$keyword%' OR
        brand LIKE '%$keyword%' OR
        warna LIKE '%$keyword%' OR
        harga LIKE '%$keyword%' 
        "
    );
} else {
    $sepatu = query("SELECT * FROM sepatu");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- MyCSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">

    <!-- Icon -->
    <link rel="icon" href="../assets/img/logo-color.png">
</head>

<body>
    <section class="admin">
        <!-- Navbar -->
        <div class="container">
            <div class="navbar bg-black ml-auto" data-role="appbar" data-expand-point="md">
                <a href="../index.php" class="brand no-hover">
                    <img src="../assets/img/logo-color.png" alt="" width="50pxpx">
                </a>

                <ul class="app-bar-menu fg-white ml-auto">
                    <li><a href="../index.php">HOME</a></li>
                    <li><a href="logout.php">LOGOUT</a></li>
                </ul>
            </div>
        </div>
        <div class="control">
            <div class="container">
                <div class="grid" style="padding-top: 60px;">
                    <div class="row">
                        <div class="cell-3">
                            <div class="add">
                                <a href="tambah.php"><button class="button primary outline">Add Product</button></a>
                            </div>
                        </div>
                        <div class="cell-6 offset-3">
                            <form action="" method="get">
                                <input type="text" name="keyword" class="keyword" placeholder="Cari disini.." data-role="input" autofocus>
                                <button type="submit" name="cari" class="button secondary outline tombol-cari"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <table class="table row-border admin-container">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Picture</th>
                    <th scope="col">Brand</th>
                    <th scope="col">Name</th>
                    <th scope="col">Color</th>
                    <th scope="col">Price</th>
                    <th scope="col">Opsi</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($sepatu)) : ?>
                    <tr>
                        <th colspan="7">Data tidak di temukan</th>
                    </tr>
                <?php else : ?>
                    <?php $i = 1;
                    foreach ($sepatu as $spt) :
                    ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><img width="300px" src="../assets/img/<?= $spt["img"] ?>" alt="foto"></td>
                            <td><?= $spt["brand"] ?> </td>
                            <td><?= $spt["nama"] ?> </td>
                            <td><?= $spt["warna"] ?> </td>
                            <td>$<?= $spt["harga"] ?> </td>
                            <td>
                                <a href="ubah.php?id=<?= $spt["id"] ?>"><button class="button info outline">Edit</button></a>

                                <a href="hapus.php?id=<?= $spt["id"] ?>" onclick="return confirm('Hapus Data??')"><button class="button warning outline">Delete</button></a>
                            </td>
                        </tr>
                    <?php
                        $i++;
                    endforeach;
                    ?>
                <?php endif; ?>
            </tbody>
        </table>


        <!-- MyScript -->
        <script src="../js/script.js"></script>
        <!-- FontAwesome -->
        <script src="https://kit.fontawesome.com/6dd84d01cb.js" crossorigin="anonymous"></script>
        <!-- Metro - 4 -->
        <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
    </section>
</body>

</html>