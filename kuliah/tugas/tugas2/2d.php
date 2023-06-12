<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas 2</title>
</head>
<style>
    body {
        font-family: arial;
    }

    .table-utama {
        border: 1px solid black;
    }

    .background {
        background-color: black;
        width: 60px;
        height: 60px;
        border: 3px solid black;
    }

    .background-2 {
        background-color: white;
        width: 60px;
        height: 60px;
    }
</style>

<body>

    <table class="table-utama" cellpadding="10" cellspacing="0">
        <?php for ($angka = 1; $angka <= 5; $angka++) : ?>
            <tr>
                <?php for ($bawah = 1; $bawah <= 5; $bawah++) : ?>
                    <?php if (($angka + $bawah) % 2 == 0) : ?>
                        <td class="background">
                        <?php else : ?>
                        <td class="background-2">
                        <?php endif; ?>
                        </td>
                    <?php endfor; ?>
            </tr>
        <?php endfor; ?>


    </table>

</body>

</html>