<?php 
$binatang = ['🐎', '🐈', '🦩', '🐱', '🐊',];
$makan = ['🍝', '🎂', '🍧','🍇','🍩',];
$peserta = ['adbul', ' aziz', 'herry', 'agus', 'acil'];
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
    <?php foreach($peserta as $i => $mhs) { ?>
    <ul>
        <li>nama:  <?=$mhs; ?></li>
        <li>makanan: <?=$makan[$i]; ?> </li>
        <li>hewan: <?=$binatang[$i]; ?> </li>
    </ul>
    <?php } ?>
    
</body>
</html>