<?php 
// Mahasiswa
$mahasiswa = [
    ["Muhamad Ariel", 223040073, "Teknk Informatika", "arielseptiadi3@gmail.com"],
    ["Celly", 223040074, "Teknk Informatika", "cellyseptiadi3@gmail.com"],
    ["Journerd", 223040075, "Teknk Informatika", "journerdseptiadi3@gmail.com"]
];

// Array Multi Dimensi


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach($mahasiswa as $mhs ): ?>
    <ul>
        <li>Nama : <?= $mhs[0]; ?></li>
        <li>Nrp : <?= $mhs[1]; ?></li>
        <li>Jurusan : <?= $mhs[2]; ?></li>
        <li>Email : <?= $mhs[3]; ?></li>
    </ul>
    <?php endforeach ?>




</body>
</html>