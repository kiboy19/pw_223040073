<?php 
$film = [
[
    'poster' => '<img src="img/theboys.jpg"',
    'judul' => 'The Boys Series',
    'tahun' => 2019,
    'genre' => 'Action, Fiksi, Sci-fi',
    'pemeran' => 'Karl Urban, Jack Quaid, Antony Star',
    'sutradara' => 'Eric Kripke'
],
[
    'poster' => '<img src="img/spd.jpg"',
    'judul' => 'Spiderman - No Way Home',
    'tahun' => 2021,
    'genre' => 'Action, Fiksi, Sci-fi',
    'pemeran' => 'Tom Hollan, Zendaya, Benedic Cumberbatch',
    'sutradara' => 'Jon Watts'
],
[
    'poster' => '<img src="img/antman.jpg"',
    'judul' => 'Ant-Man & The Wasp : Quantumania',
    'tahun' => 2023,
    'genre' => 'Action, Fiksi, Sci-fi',
    'pemeran' => 'Paul Rudd, Evangeline Lilly, Michael Douglas',
    'sutradara' => 'Peyton Reed'
]
]


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film</title>
    <style>
        h1 {
            text-align: center;
        }
        ul {
            text-align: center;
        }
        ul li {
            margin-top: 10px;
            list-style: none;
            font-size : 20px;
        }
        img {
            width: 270px;
            height: 270px;
        }

    </style>
</head>
<body>
    <h1>DAFTAR FILM FAVORIT</h1>
    
    <?php foreach($film as $flm){?>
        <ul class="tengahin">
            <li><?=$flm['poster']; ?></li>
            <li>Judul <?= $flm['judul']; ?></li>
            <li>Tahun <?= $flm['tahun'];?></li>
            <li>Genre <?= $flm['genre'] ?></li>
            <li>Pemeran <?= $flm['pemeran']?></li>
            <li>Sutradara <?= $flm['sutradara'] ?></li>
        </ul>
        <hr>
    <?php } ?>
</body>
</html>