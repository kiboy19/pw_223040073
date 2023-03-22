<?php 
// Array
// Variabel yang dapat memiliki banyak nilai
// Element pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0



// Membuat array
$bulan = ["Januari", "Februari", "Maret"];
$hari = ["Senin", "Selasa", "Rabu"];
$arr1 = [1234, "Tulisan", true];


// Menampilkan Array
// var_dump() / print_r()

// var_dump($hari);
// echo "<br>";
// print_r($bulan);
// echo "<br>";

// Menampilkan 1 elemen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// Menambahkan element baru pada array
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jum'at";
echo "<br>";
var_dump($hari);


?>