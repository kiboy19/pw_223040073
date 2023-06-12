<?php 
//ARRAY
//Membuat array
$hari = array('senin', 'selasa', 'rabu');
$bulan = ['january', 'february', 'maret'];
$myArray = ['abdul aziz', 19, false];
$binatang = ['🐎', '🐈', '🦩', '🐱‍👤', '🐊'];

//mencetak array
//mencetak 1 elemen array di dalam array menggunakan echo
echo $hari[2];
echo "<hr>";

//mencetak semua isi array 
//var_dump, print_r

// var_dump ($hari);
// echo "<br><br>";
// print_r ($bulan);
// echo "<br><br>";
// var_dump($myArray);
// echo "<br><br>";
// print_r($binatang);
// echo "<hr><br>";

//mainpulasi array
//menambahkan elemen mengunakan index(tidak disarankan)
$hari[3]= 'kamis';
print_r ($hari);
echo "<br><br>";
//menambahkan elemen di akhir array menggunakan []
$hari[] = "jum'at";
$hari[] = 'sabtu';
$hari[] = 'minggu';
print_r($hari);
echo "<hr><br>";

//menambah elemen di akhir array menggunakan array_push
array_push($bulan , 'April', 'mei', 'juni');
print_r($bulan);
echo "<br><br>";

//menambahkan elemen di awal array menggunakan array_unshift
array_unshift($binatang, '🐍', '🦇');
print_r($binatang);
echo "<br><br>";
//menghapus elemen di belakang array dengan array_pop
array_pop($hari);
array_shift($hari);
print_r($hari);
echo "<br><br>";

// menghapus elemen di depan array dengan array_shift

array_shift($bulan);
print_r($bulan);
?>