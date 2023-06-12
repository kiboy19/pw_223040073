<?php
/*
Surya Putra Pratama
203040065
Shift Jum'at 10.00 - 11.00


Tubes
*/


// Menghubungkan dengan file php lainya
require 'php/function.php';
//melakukan query
$sepatu = query("SELECT * FROM sepatu");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <!-- My CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Metro 4 -->
    <link rel="stylesheet" href="https://cdn.metroui.org.ua/v4.3.2/css/metro-all.min.css">
    <!-- Animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />




    <link rel="icon" href="assets/img/logo-color.png">
    <title>XRaa : Place to Buy Your Dream Shoes</title>
</head>

<body>
    <!-- NavBar -->
    <?php include('element/header.php'); ?>

    <section class="home" id="home">
        <div class="poster text-center">
            <div class="container">
                <h2 class="display2">THE PLACE</h2>
                <h1 class="display3 udl">FOR YOU TO BUY</h1>
                <p class="lead">SHOES, BAGS, STREETWEAR, COLLECTIBLES AND WATCHES</p>
            </div>
        </div>
    </section>

    <section class="product" id="product">
        <div class="container">
            <div class="row">
                <div class="col-md-5 mx-auto">
                    <h1 class="udl">Our Product</h1>
                    <h3>Browse Thousands of Our Product Here</h3>
                    <h6>We have thousands of authentic sneakers, streetwear, bags, collectibles, and watches for you to pick.</h6>
                    <div class="controls-top row justify-content-center">
                        <a class="btn rounded-circle" href="#multi-item-example" data-slide="prev"><i class="fas fa-angle-left"></i></a>
                        <a class="btn rounded-circle" href="#multi-item-example" data-slide="next"><i class="fas fa-angle-right"></i></a>
                    </div>
                </div>

                <div class="col-md-7 poster back-element" id="poster-product">
                    <!-- carousel -->
                    <div id="multi-item-example" class="carousel slide carousel-multi-item " data-ride="carousel">

                        <!--Slides-->
                        <div class="carousel-inner " role="listbox">

                            <div class="carousel-item active ">
                                <div class="col-md-12">
                                    <div class="card ">
                                        <img class="card-img-top align-content-center" src="assets/img/sneakers.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Sneakers</h3>
                                            <h6 class="card-text">Buy authentic sneaker here</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <img class="card-img-top align-content-center" src="assets/img/hoodie.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Hoodies</h3>
                                            <h6 class="card-text">Buy authentic hoodie here</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <img class="card-img-top align-content-center" src="assets/img/tshirt.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Tshirts</h3>
                                            <h6 class="card-text">Buy authentic tshirts here</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="carousel-item ">
                                <div class="col-md-12">
                                    <div class="card">
                                        <img class="card-img-top align-content-center" src="assets/img/bag.png" alt="Card image cap">
                                        <div class="card-body">
                                            <h3 class="card-title">Bags</h3>
                                            <h6 class="card-text">Buy authentic bag here</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <!--Akhir slide-->
                    </div>
                    <!--Akhir Carousel-->


                </div>
            </div>

        </div>
    </section>


    <section class="list-product">.
        <div class="container">
            <h2 class="udl">Our Product</h2>
            <div class="grid">
                <div class="row">
                    <?php
                    foreach ($sepatu as $spt) :
                    ?>
                        <div class="cell-md-3">
                            <a href="php/detail.php?id=<?= $spt["id"] ?>">
                                <div class="card">
                                    <div class="card-header">
                                        <img style="width: 100%;" src="assets/img/<?= $spt['img'] ?>">
                                    </div>
                                    <div class="card-content p-2 text-center">
                                        <?= $spt["nama"] ?>
                                    </div>
                                    <div class="card-content harga text-center">
                                        $<?= $spt["harga"] ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

        </div>
    </section>

    <!-- Footer -->
    <?php include('element/footer.php'); ?>

    <!-- fontawesome icon -->
    <script src="https://kit.fontawesome.com/6dd84d01cb.js" crossorigin="anonymous"></script>
    <!-- My Script -->
    <script src="js/script.js"></script>
    <!-- Metro - 4 -->
    <script src="https://cdn.metroui.org.ua/v4.3.2/js/metro.min.js"></script>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

</body>

</html>