<?php

error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors',TRUE);


$image = imagecreatefromjpeg("certificado.jpg");//Criando uma imagem a partir de uma imagem
$title_color = imagecolorallocate($image, 0,0,0);//Título da imagem
imagettftext($image, 32, 0, 310, 150, $title_color, "fonts".DIRECTORY_SEPARATOR."Bevan". DIRECTORY_SEPARATOR."Bevan-Regular.ttf" ,"CERTIFICADO");//texto 1
imagettftext($image, 32, 0, 250, 190, $title_color, "fonts".DIRECTORY_SEPARATOR."Playball". DIRECTORY_SEPARATOR."Playball-Regular.ttf", utf8_decode("Concluído em: ").date("d/m/Y"));//texto 2
imagestring($image, 3, 330, 600,"________________________________________",$title_color);//texto 2
imagestring($image, 5, 390, 610,"Divanei Aparecido",$title_color);//texto 3
header("Content-Type: image/jpeg");//chamando funcao header
imagejpeg($image, "certificado-".date("d-m-Y").".jpg");//Salva o arquivo
//imagejpeg($image);//Mostra na tela
imagedestroy($image);
?>