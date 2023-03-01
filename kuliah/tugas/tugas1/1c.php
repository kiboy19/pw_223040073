<?php  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .flex {
            display: flex;
        }
        .kotak {
            width: 100px;
            height: 100px;
            background-color: salmon;
            position: relative;
            border: 1px solid black;
        }

        .kotak  span {
            position: absolute;
            font-family: sans-serif 'times new roman';
            color: white;
            font-weight: 500;
            font-size: 30px;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
    </style>
</head>
<body>
    <div class="flex">
        <div class="kotak">
            <span>1</span>
        </div>
    </div>
    <div class="flex">
        <div class="kotak">
            <span>2</span>
        </div>
        <div class="kotak">
            <span>2</span>
        </div>
    </div>
    <div class="flex">
        <div class="kotak">
            <span>3</span>
        </div>
        <div class="kotak">
            <span>3</span>
        </div>
        <div class="kotak">
            <span>3</span>
        </div>
    </div>
</div>
</body>
</html>