<?php
$arr = [
    "45" => '54',
    "28" => '82',
    "94" => '49',
    "56" => '65',
    "67" => '76',
    "30" => '03',
    "14" => '41',
    "55" => '55',
    "79" => '97',
    "25" => '52'
]

?>

html<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div>

    <?php
    foreach ($arr as $key => $value){
        echo "{$key} => {$value} ". '</br>' ;
    }
    ?>

</div>
</body>
</html>