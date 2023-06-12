<?php
require_once __DIR__ . '/vendor/autoload.php';

require('koneksi.php');
// Ambil queri produk Kebugaran
$artikels = query("SELECT * FROM artikel");

$mpdf = new \Mpdf\Mpdf();
$html = '
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Inidoc - Daftar Product</title>
    <link rel="icon" type="image/x-icon" href="../img/favico.png" />
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/print.css" />
  </head>
  <body>
  <h1>Daftar Artikel Inidoc</h1>
  <table border="1" cellpadding="10" cellspacing="0" class="table table-bordered">

    <tr>
      <th>No</th>
      <th>Gambar</th>
      <th>Judul</th>
    </tr>';

    $i = 1;
    foreach($artikels as $artikel){
      $html .= '<tr>
            <td>'. $i++ .'</td>
            <td><img src="img/'. $artikel["gambar"] .'" style="width:50px;"></td>
            <td>'. $artikel['judul'] .'</td>
      </tr>';
    }

$html .= '</table>
  </body>
  </html>';
$mpdf->WriteHTML($html);
$mpdf->Output('daftar-artikel.pdf', 'I');
?>


