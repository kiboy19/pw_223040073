<?php 

// Fungsi Lingkaran
function hitungluaslingkaran($r) {
    $pi = 3.14;
    $hasil = $pi * $r * $r;
    echo "<h2>Menghitung Luas Lingkaran</h2>";
    echo "Jari-Jari : $r <br>";
    echo "Luas Lingkran : $hasil";
}

hitungluaslingkaran(10);

echo "<hr>";

// Fungsi Hituang Keliling Lingkaran
function hitungkelilinglingkaran($r) {
    $pi = 3.14;
    $hasil = 2 * $pi * $r;
    echo "<h2>Menghitung Keliling Lingkaran</h2>";
    echo "Jari-jari : $r <br>";
    echo "Keliling Lingkaran : $hasil";
}

hitungkelilinglingkaran(10);

?>