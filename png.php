<?php
$im="image.png";
$im_php = imagecreatefrompng($im);//Загружаем изображение в переменную
$im_php = imagescale($im_php, 200);//Сжимаем до 200 px
$im_php = imagecrop($im_php, ['x' => 0, 'y' => 0, 'width' => 200, 'height' => 100]);//Кадрируем по правилу
header('Content-Type: image/png'); //Говорим браузеру, что выводить будем картинку
imageInterlace($im_php, 1);//Задаем черезстрочный режим для ускорения выдачи в браузер
imagePNG($im_php);//Выводим картинку
imagedestroy($im_php);// Очищаем память
?>