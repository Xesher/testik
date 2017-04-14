<?php// наше изображение
$img = ImageCreateFromJPEG("pic.jpg");

// определяем цвет, в RGB
$color = imagecolorallocate($img, 255, 0, 0);

// указываем путь к шрифту
$font = 'arial.ttf';

$text = urldecode($_GET['name']);
imagettftext($img, 24, 0, 365, 159, $color, $font, $text);
// 24 - размер шрифта
// 0 - угол поворота
// 365 - смещение по горизонтали
// 159 - смещение по вертикали

header('Content-type: image/jpeg');
imagejpeg($img, NULL, 100);?>