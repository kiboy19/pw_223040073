<?php
$id_produk = $_GET["id_produk"];

$detprod = query("SELECT * FROM produk WHERE id_produk = $id_produk")[0];
?>
    <!-- Detail Produk -->
    <div class="container-fluid mainprod">
        <div class="container detprod">
            <div class="row">
                <div class="col dprod">
                    <img src="../img/<?= $detprod["gambar"]; ?>" alt="">
                </div>
                <div class="col deprices">
                    <h3><?= $detprod["nama"]; ?></h3>
                    <h2>IDR <?= $detprod["harga"]; ?><i>/pcs</i></h2>
                    <p>Stok: <?= $detprod["stok"]; ?></p>
                    <button class="btn bg-primary"><a href="" style="color: #fff; text-decoration: none;">Beli Sekarang</a></button>
                </div>
            </div>
            <hr>
            <div class="garansi text-center">
                <p>Produk Kami 100% Asli dan kami memberi garansi dalam produk kami.</p>
            </div>
            <div class="desc">
                <h4>Deskripsi</h4>
                <p><?= $detprod["deskripsi"]; ?></p>
            </div>
        </div>
    </div>