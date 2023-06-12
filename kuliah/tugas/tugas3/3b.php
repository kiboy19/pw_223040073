<?php 

function urutanAngka($angka4){
$angka3 = 1;
for ($angka = 1; $angka <= $angka4; $angka++){
    for($angka2 = 1; $angka2 <= $angka; $angka2++ ) {
        echo $angka3++ . " ";
    }
    echo "<br>";

}
echo "<hr>";
}
urutanAngka(5);





?>