<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00
Tubes
*/


if (!isset($_GET['id'])) {
    header("location: ../index.php");
    exit;
}

require '../php/function.php';
$id = $_GET["id"];

//melakukan query
$sepatu = query("SELECT * FROM sepatu WHERE id = $id")[0];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- My CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />


    <!-- Icon -->
    <link rel="icon" href="../assets/img/logo-color.png">
    <title>XRaa : Place to Buy Your Dream Shoes</title>
</head>

<body>
    <!-- Navbar -->
    <div class="container fg-light">
        <div class="navbar ml-auto navbar-colored" data-role="appbar" data-expand-point="md" id="mynav">
            <a href="../index.php" class="brand no-hover">
                <img src="../assets/img/logo-color.png" alt="" width="50pxpx" id="nav-brand">
            </a>

            <ul class="app-bar-menu fg-white ml-auto">
                <li><a href="../index.php">HOME</a></li>
                <li>
                    <a href="#" class="dropdown-toggle">PRODUCTS</a>
                    <ul class="d-menu" data-role="dropdown">
                        <li><a href="../produk.php?keyword=nike">Nike</a></li>
                        <li><a href="../produk.php?keyword=adidas">Adidas</a></li>
                        <li class="divider bg-lightGray"></li>
                        <li><a href="../produk.php">More</a></li>
                    </ul>
                </li>
                <li><a href="../php/login.php">ADMIN</a></li>
            </ul>
        </div>
    </div>
    <section class="detail-product">
        <div class="container">
            <div class="detail">
                <h1 class="nama-sepatu "><?= $sepatu['brand'] ?> <?= $sepatu['nama'] ?></h1>
                <h4>Color : <?= $sepatu['warna'] ?> | 100%<span> Authentic</h4>
                <img class="image" src="../assets/img/<?= $sepatu['img'] ?>" alt="">

                <hr>
                <div class="row justify-content-center">
                    <div class="col-sm-2 text-left">
                        <h6>Brand </h6>
                        <h6>Color </h6>
                        <h6> Price </h6>
                    </div>
                    <div class="col-sm-2 text-left">
                        <h6><?= $sepatu['brand'] ?></h6>
                        <h6><?= $sepatu['warna'] ?> </h6>
                        <h6>$<?= $sepatu['harga'] ?></h6>
                    </div>
                    <div class="col-sm-5 offset-md-3  text-left auth">
                        <h5>Authentic. Guaranteed.</h5>
                        <h6>100% Verified Authentic</h6>
                        <p>Every item sold goes through our proprietary multi-step verification process with our team of expert authenticators.</p>
                    </div>
                </div>
                <a href="../index.php" class="text-right"><button class="button success"> Back</button> </a>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer" id="footer">
        <div class="row mb-4">
            <div class="col-md-4 col-sm-11 col-xs-11">
                <div class="footer-text pull-left">
                    <div class="d-flex company-brand">
                        <img src="../assets/img/logo-color.png" width="60px" alt="" class="brand-logo">
                        <h1>X<span>Raa</span></h1>
                    </div>
                    <p class="card-text">XRaa is the global platform for style base in indonesia. Founded in 2020 to bring trust to the sneaker community</p>
                </div>
            </div>

            <div class="col-md-2 col-sm-1 col-xs-1 mb-2"></div>
            <div class="col-md-2 col-sm-4 col-xs-4 footer-content d-block">
                <h5 class="heading udl">Poppular Brands</h5>
                <ul class="card-text ">
                    <li><a href="../produk.php?keyword=nike">Nike</a></li>
                    <li><a href="../produk.php?keyword=adidas">Adidas</a></li>
                    <li><a href="../produk.php?keyword=puma">Puma</a></li>
                    <li><a href="../produk.php?keyword=converse">Converse</a></li>
                </ul>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-4 footer-content d-block">
                <h5 class="heading udl">Site Map</h5>
                <ul class="card-text ">
                    <li>About Us</li>
                    <li>Why Us</li>
                    <li>Our Product</li>
                    <li>Contact</li>
                </ul>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-4 footer-content d-block">
                <h5 class="heading udl">Find Us On</h5>
                <ul class="card-text social">
                    <li><i class="fab fa-facebook"></i>Facebook</li>
                    <li><i class="fab fa-instagram"></i> Instagram</li>
                    <li><i class="fab fa-android"></i>Playstore</li>
                    <li><i class="fab fa-app-store"></i>AppStore</li>
                </ul>
            </div>
        </div>
        <div class="line mb-4"> </div>
        <div class="row">
            <div class="col-md-12 text-center">
                <h6><i class="fa fa-copyright"></i> 2021 XRaa. All Rights Reserved.</h6>
            </div>
        </div>
    </section>
    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/6dd84d01cb.js" crossorigin="anonymous"></script>
    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>