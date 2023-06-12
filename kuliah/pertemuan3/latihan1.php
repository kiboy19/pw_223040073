<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo 'Mulai <br>';
    $nilai_awal = 10;
    while ($nilai_awal >=0) {
    echo "Hello Word $nilai_awal x! <br>";
    $nilai_awal --;
    }
    echo 'Selesai <br>';

    echo "<hr>";
    echo 'Mulai <br>';
    for ($nilai_awal = 1; $nilai_awal <=10;
    $nilai_awal++) {
        echo "Hello Word $nilai_awal  <br>";
    }
    ?>
</body>
</html>