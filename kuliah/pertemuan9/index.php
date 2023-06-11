<?php 
require('functions.php');
$title = "Home";
$students = [
    [
        "nama" => "Muhamad Ariel Septiadi",
        "npm" => "223040073",
        "email" => "arielseptiadi3@gmail.com"
    ],
    [
        "nama" => "Haidar Ali", 
        "npm" => "223040075",
        "email" => "haidarcoy@gmail.com"
    ],
];

// dd($_SERVER["REQUEST_URI"]);
// /pw_223040073/kuliah/pertemuan9/
require('views/index.view.php')
?>