<?php 
// Array Associative
// Mengubah index array dari numerik menjadi string
$mahasiswa = [
[
    'nama' => 'adbul', 
    'binatang' => '🐎', 
    'makanan' => ['🍔', '🍟']
], 
[
    'nama' => 'aziz', 
    'binatang' => '🐈', 
    'makanan' =>  ['🧇', '🧈']
], 
[
    'nama' => 'herry', 
    'binatang' => '🦩', 
    'makanan' =>  ['🍔', '🍟']
], 
[
    'nama' => 'agus', 
    'binatang' => '🐱', 
    'makanan' =>  ['🍔', '🍟']
], 
[
    'nama' => 'acil', 
    'binatang' => '🐊', 
    'makanan' =>  ['🍔', '🍟']
]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
</head>
<body>

    <h2>Daftar Mahasiswa</h2>
    <?php foreach($mahasiswa as $mhs) { ?>
    <ul>
        <li>nama:  <?=$mhs['nama']; ?></li>
        <li>makanan: <?php foreach($mhs['makanan'] as $makan){
                echo $makan;
            }?>
        </li>
        <li>hewan: <?=$mhs['binatang']; ?> </li>
    </ul>
    <?php } ?>
    
</body>
</html>