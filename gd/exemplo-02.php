<?php
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors',TRUE);


$image = imagecreatefromjpeg("certificado.jpg");//Criando uma imagem a partir de uma imagem
$title_color = imagecolorallocate($image, 0,0,0);//Título da imagem
imagestring($image, 5, 410, 150,"CERTIFICADO",$title_color);//texto 1
imagestring($image, 3, 375, 180,utf8_decode("Concluído em: ").date("d/m/Y"),$title_color);//texto 2
imagestring($image, 3, 330, 600,"________________________________________",$title_color);//texto 2
imagestring($image, 5, 390, 610,"Divanei Aparecido",$title_color);//texto 3
header("Content-Type: image/jpeg");//chamando funcao header
//imagejpeg($image);//Mostrando imagem na tela
imagejpeg($image, "certificado-".date("d-m-Y").".jpg",10);
imagedestroy($image);




?>