<?php

/*
   Gerar imagens pequenas em cima de uma original
*/

//Deifinção do formato da imagem
header("Content-type: image/jpeg");

//Definição do nome do arquivo
$file = "wallpaper.jpg";

//Definião das dimensões na nova imagem
$new_width = 256;
$new_height = 256;

//Dimensões da imagem original
list($old_width, $old_height) = getimagesize($file);	

//Carregar palheta de várias cores que a nossa visão está acostumada a enxergar
$new_image = imagecreatetruecolor($new_width, $new_height);

//Criar a imagem a partir da imagem antiga
$old_image = imagecreatefromjpeg($file);

imagecopyresampled($new_image, $old_image, 0, 0, 0, 0, $new_width, $new_height, $old_width, $old_height);

//Gerar a imagem
imagejpeg($new_image);

//Destruir a imagem da memória
imagedestroy($old_image);
imagedestroy($new_image);



?>