<?php

//Criando uma imagem a partir de uma outra
$image = imagecreatefromjpeg("certificado.jpg");

//Criação de Palheta de Cores
$titleColor = imagecolorallocate($image, 0, 0, 0);		//Cor Preta
$gray = imagecolorallocate($image, 100, 100, 100);		//Cor Cinza

//Escrever na imagem
//parametro de tamanho da fonte (32); parametro de angulo horizantal ou vertical (0);
//parametro da cor do texto ($titleColor); parametro do nome do arquivo de fonte (fonts....)
//parâmetro de texto
imagettftext($image, 32, 0, 320, 150,  $titleColor, "fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf","Certificado" );
imagettftext($image, 32, 0,440, 350, $titleColor, "fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf","Divani Aparecido" );
imagestring($image, 3, 440, 370, utf8_decode("Concluído em ").date("d/m/Y"), $titleColor);

//header("Content-type: image/jpeg");

//O segundo parâmetro refere-se ao nome do arquivo
imagejpeg($image);

imagedestroy($image);


?>