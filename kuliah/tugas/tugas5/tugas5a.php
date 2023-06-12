<?php 

// Data Mahasiswa
$mahasiswa = [
    [
        'Nama' => 'Muhamad Ariel Septiadi',
        'NRP' => 223040073,
        'Email' => 'arielseptiadi3@gmail.com',
        'Jurusan' => 'Teknik Informatika',
        'Foto' => '<img src="img/f1.png"'
    ],
    [
        'Nama' => 'Stefan Wiliam',
        'NRP' => 223040074,
        'Email' => 'stefanwillsample@gmail.com',
        'Jurusan' => 'Teknik Informatika',
        'Foto' => '<img src="img/f2.jpg"'
    ],
    [
        'Nama' => 'Andi Mulia',
        'NRP' => 223040075,
        'Email' => 'andimuliasample@gmail.com',
        'Jurusan' => 'Teknik Informatika',
        'Foto' => '<img src="img/f3.jpeg"'
    ],
    [
        'Nama' => 'Sherlyn James',
        'NRP' => 223040076,
        'Email' => 'sherlynjsample@gmail.com',
        'Jurusan' => 'Teknik Informatika',
        'Foto' => '<img src="img/f4.jpg"'
    ],
    [
        'Nama' => 'Nabilah Syakieb',
        'NRP' => 223040077,
        'Email' => 'nabilahsyakiebsample@gmail.com',
        'Jurusan' => 'Teknik Informatika',
        'Foto' => '<img src="img/f5.jpg"'
    ],
    [
        'Nama' => 'Eren Yeager',
        'NRP' => 223040078,
        'Email' => 'erenyeagersample@gmail.com',
        'Jurusan' => 'Teknik Informatika',
        'Foto' => '<img src="img/f6.jpg"'
    ],
    [
        'Nama' => 'Uzumaki Naruto',
        'NRP' => 223040079,
        'Email' => 'uzumakinarutosample@gmail.com',
        'Jurusan' => 'Teknik Informatika',
        'Foto' => '<img src="img/f7.jpg"'
    ],
    [
        'Nama' => 'Kakaroto',
        'NRP' => 223040080,
        'Email' => 'kakarotosample@gmail.com',
        'Jurusan' => 'Teknik Informatika',
        'Foto' => '<img src="img/f8.jpg"'
    ],
    [
        'Nama' => 'Yuki Kato',
        'NRP' => 223040081,
        'Email' => 'yukikatosample@gmail.com',
        'Jurusan' => 'Teknik Informatika',
        'Foto' => '<img src="img/f9.jpg"'
    ],
    [
        'Nama' => 'Andre Taulany',
        'NRP' => 223040082,
        'Email' => 'andretaulanysample@gmail.com',
        'Jurusan' => 'Teknik Informatika,',
        'Foto' => '<img src="img/f10.jpg"'
    ],
];
?>

<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Tugas 5a | Data mahasiswa</title>
    <style>
        body {
            background-color: #0093E9;
            background-image: linear-gradient(160deg, #0093E9 0%, #80D0C7 100%);
        }

        .heading {
            padding: 15px;
            background-color: salmon;
            width: 25%;
            margin: auto;
            border-radius: 10px;
            box-shadow: black 10px 10px 20px;
        }

        h2 {
            text-align: center;
            font-size: 20px;
            color: white;
        }
        .anjay{
            padding: 25px;
        }
        ul {
            background-color: salmon;
            width: 25%;
            padding: 15px;
            border-radius: 10px;
            box-shadow: black 10px 10px 20px;
            margin: auto;
        }
        ul li {
            list-style: none;
            color: white;
        }
        img {
            width: 100px;
            height: 120px;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <div class="heading">
        <h2>Data Mahasiswa Teknik Informatika</h2>
    </div>
    <?php foreach($mahasiswa as $mhs) { ?>
        <div class="anjay">
            <ul>
                <li>Nama : <b><?= $mhs['Nama']; ?></b></li>
                <li>NRP : <b><?= $mhs['NRP']; ?></b></li>
                <li>Email : <b><?= $mhs['Email']; ?></b></li>
                <li>Jurusan : <b><?= $mhs['Jurusan']; ?></b></li>
                <li><?= $mhs['Foto']; ?></li>
            </ul>
        </div>
            <hr>
    <?php } ?>
</body>
</html>