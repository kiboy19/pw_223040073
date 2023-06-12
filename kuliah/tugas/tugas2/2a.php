<?php
$firstname = "Muhamad Ariel";
$lastname = "Septiadi";

for ($angka = 1; $angka <= 100; $angka++) {
    if ($angka % 3 == 0 && $angka % 5 == 0) {
        echo $firstname . " " . $lastname . "<br>";
    }elseif ($angka % 3 == 0){
        echo $firstname . "<br>";
    }elseif ($angka % 5 == 0){
        echo $lastname . "<br>";
    }else {
        echo $angka . "<br>";
    }

}