<?php
require("../koneksi.php");
global $result;
// var_dump($result);
// while ( $data = mysqli_fetch_row($result) ){
//   var_dump($data);
// }
// ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List Pengguna</title>
    <style>
      .baris {
        display: flex;
        flex-direction: row;
        margin: auto;
      }
      .kotakin {
        background-color: blue;
        margin: 10px;
        padding: 20px;
        color: white;
        width: 25%;
      }
      .kotakin img {
        border-radius: 10px;
      }
    </style>
  </head>
  <body>
    <h1>LIST PENGGUNA</h1>
    <hr>
    <section class="box" style="width: 100%; height: 50vh;">
      <div class="baris">
        <?php while ( $row = mysqli_fetch_assoc($result) ): ?>
        <div class="kotakin">
          <img src="../img/<?php echo $row["gambar"]; ?>" alt="" style="width:100px;" >
          <h3><?php echo $row["nama"]; ?></h3>
          <p><?php echo $row["email"]; ?></p>
        </div>
        <?php endwhile; ?>
      </div>
    </section>
  </body>
</html>
