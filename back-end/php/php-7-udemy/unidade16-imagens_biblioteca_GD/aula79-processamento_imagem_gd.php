<?php

/*
   Biblioteca GD - é usada também em outras linguagens de programação; trabalho com eixo X e Y; é possível diminuir a imagem (no html somente redimensiona e ocupa o mesmo espaço de armazenamento, diferente do que acontece nesta biblioteca que processa a imagem gerando outra menor e de menor espaço para armazenar)    
*/

header("Content-Type: image/png");

//Criando a tela da imagem
$image = imagecreate(256, 256);

//Criação de Palheta de cores para trabalhar (A primeira cor criada já vira a cor de fundo da imagem)
$black = imagecolorallocate($image, 0, 0,0);		//Cor Preta
$red = imagecolorallocate($image, 255, 0,0);		//Cor Vermelha

//Escrever na tela
imagestring($image, 5, 60, 120, "Curso PHP 7", $red);

//Definição no formato da imagem (tem que ser igual ao definino no inicio (header))
imagepng($image);

//Destruir a variável resorce
imagedestroy($image);



?>