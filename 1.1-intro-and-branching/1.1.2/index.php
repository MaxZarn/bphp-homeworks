<?php
//  Ваш программный код, в котором определяются значения 
//  переменных для последующего задания текста и стилей
$time = date("H");
$day =  date("N");

if ($day == 1){
    $day = 'Понедельник';
} elseif ($day == 2) {
    $day = 'Вторник';
} elseif ($day == 3) {
    $day = 'Среда';
} elseif ($day == 4) {
    $day = 'Четверг';
} elseif ($day == 5) {
    $day = 'Пятница';
} elseif ($day == 6) {
    $day = 'Суббота';
} elseif ($day == 7) {
    $day = 'Воскресенье';
} else {
    $day = 'undefined';
}
if ($time >= 6 && $time < 11) {
    $greeting = 'Доброе утро! <hr> Сегодня';
    $background = "https://cdn.pixabay.com/photo/2016/09/21/04/46/barley-field-1684052_1280.jpg";
} elseif ($time >= 11 && $time < 18) {
    $greeting =  'Добрый день! <hr> Сегодня';
    $background = "https://cdn.pixabay.com/photo/2015/11/16/22/39/balloon-1046658_1280.jpg";
} elseif ($time >= 18 && $time < 23) {
    $greeting = 'Добрый вечер! <hr> Сегодня';
    $background = "https://cdn.pixabay.com/photo/2016/12/27/21/03/lone-tree-1934897_1280.jpg";
} else {
    $greeting = 'Доброй ночи! <hr> Сегодня';
    $background = "https://cdn.pixabay.com/photo/2016/11/25/23/15/moon-1859616_1280.jpg";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>bPHP - 1.1.1</title>
    <!-- подключение стилевого файла -->
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background: url(<?= $background ?>) no-repeat; background-size: 100%; text-align: center">
    <h1><?= $greeting . ' ' . $day?></h1>
</body>
</html>