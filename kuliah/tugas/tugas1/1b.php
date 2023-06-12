<?php 
$npm = 73;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>
        Aku adalah angka <b><?php echo $npm; ?></b><br>
        Jika aku dikali 5, maka aku sekarang menjadi <b><?php echo $npm * 5;  ?></b><br>
        Jika aku dibagi 2, maka aku sekarang menjadi <b><?php $npm = 365; echo $npm / 2; ?></b><br>
        Jika aku ditambah 75, maka aku sekarang menjadi <b><?php $npm = 182.5; echo $npm + 75; ?></b><br>
        Jika aku dikurang 20, maka aku sekarang menjadi <b><?php $npm = 257.5; echo $npm - 20; ?></b>
    </p>
</body>
</html>