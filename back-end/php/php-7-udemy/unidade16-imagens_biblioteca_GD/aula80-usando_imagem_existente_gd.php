<?php

/*
   Como fazer uma iamgem baseando-se em uma outra imagem.
*/

//Criando uma imagem a partir de uma outra
$image = imagecreatefromjpeg("certificado.jpg");

//Criação de Palheta de Cores
$titleColor = imagecolorallocate($image, 0, 0, 0);		//Cor Preta
$gray = imagecolorallocate($image, 100, 100, 100);		//Cor Cinza

//Escrever na imagem
imagestring($image, 5, 450, 150, "Certificado", $titleColor);
imagestring($image, 5, 440, 350, "Divanei Aparecido", $titleColor);
imagestring($image, 3, 440, 370, utf8_decode("Concluído em ").date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");

//O segundo parâmetro refere-se ao nome do arquivo e o terceiro à qualidade da imagem
imagejpeg($image, "Certificado".date("Y-m-d").".jpg", 10);

imagedestroy($image);


?>