<?php
$today = date("Y");
$parag = "Заголовок первого уровня";
const TITLE = 'Попытка номер раз';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?=TITLE?></title>
</head>
<body>
<h1><?=$parag?></h1>
Год: <?=$today?>
</body>
</html>