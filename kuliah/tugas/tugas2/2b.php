<?php

$angka = 1;
echo "<table>";

while ($angka <= 10) {
    echo "<tr>";
    $bawah = 1;
    while ($bawah <= $angka) {
        echo "<td>". $bawah . "</td>";
        $bawah++;
    }
    echo "</tr>";
    $angka++;
}
echo "</table>";