<?php 
// Array Macam-Macam Perangkat Keras
$hardwares = ["Processor", "Ram", "Hardisk", "SSD", "VGA", "Monitor"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>4b PHP</title>
</head>
<body>
    <h1>Macam-Macam perangkat keras komputer</h1>
    <ol>
        <?php foreach($hardwares as $hardware) : ?>
            <li><?= $hardware; ?></li>
        <?php endforeach ?>
    </ol>
    <h1>Macam-macam perangkat keras komputer baru</h1>
    <?php 
    $hardwares = ["Card Reader", "Hardisk", "Monitor", "Modem", "Processor", "Ram", "SSD", "VGA"];
    ?>
    <ol>
    <?php foreach($hardwares as $hardware) : ?>
        <li><?= $hardware ?></li>
    <?php endforeach ?>
    </ol>
</body>
</html>