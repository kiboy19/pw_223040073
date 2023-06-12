<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas-2c</title>
</head>
<style>
    body {
        font-family: arial;
        font-weight: bold;
    }

    .background {
        background-color: salmon;
        border: 1px solid black;
        color: black;
        width: 35px;
        height: 35px;
        text-align: center;
    }
</style>

<body>

    <table cellpadding="10" cellspacing="0">
        <?php for ($angka = 10; $angka >= 1; $angka--) : ?>
            <tr>
                <?php for ($bawah = 1; $bawah <= $angka; $bawah++) : ?>
                    <td class="background"> <?= "$bawah"; ?></td>
                <?php endfor; ?>
            </tr>
        <?php endfor; ?>


    </table>

</body>

</html>