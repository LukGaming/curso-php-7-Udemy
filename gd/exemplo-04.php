<?php


header("Content-Type: image/jpeg");
$file = "wallpaper.jpg";//onde está a imagem
$new_width = 256;//novas dimensoes da imagem
$new_height = 256;//novas dimensoes da imagem
$data = getimagesize($file);//pegando dimensoes antigas da imagem
list($old_width, $old_height) = getimagesize($file); // criando duas variaveis sobre as dimensoes
$new_image = imagecreatetruecolor($new_width, $new_height);//criando nova imagem a partir das cores verdadeiras 16.8 bi
$old_image = imagecreatefromjpeg($file);//Criando imagem a partir da antiga imagem
imagecopyresampled($new_image, $old_image, 0,0,0,0,$new_width,$new_height, $old_width, $old_height);//parametros para criacao de nova imagem
imagejpeg($new_image,"thumb".date("m/d/Y").".jpg");//Salvado imagem
imagedestroy($old_image);
imagedestroy($new_image);


?>