<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('displa_startup_errors',TRUE);
header("Content-Type: image/png");
$image = imagecreate(256,256);
$blackground_color = imagecolorallocate($image, 0,0,0);//background blacak
$text_color = imagecolorallocate($image, 255,0,0);//text red
imagestring($image, 5,60,120, "Curso PHP 7", $text_color);
imagepng($image);
imagedestroy($image);

?>