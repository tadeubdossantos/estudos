<?php
 
/*
    Em um projeto talvez deveremos utilizar 4 classes numa funcionalidade, mas ao invés de dar "require" nestas classes usamos o recurso do "autoload"
    A função "__autoload" não precisa ser chamada, pois ela já é chamada a partir do momento que ocorre a instanciação de um objeto (o comando new já chamada a função), portanto basta deixar ela definida
*/


function __autoload($nomeClasse){       //Mais uma das funções mágicas; Recebe como parâmetro o nome da classe a ser chamada;
    var_dump($nomeClasse);               
    require_once($nomeClasse.".php");    
}

$carro = new DelRey();                  //Chama a função "__autoload" automaticamente
$carro->acelerar(80);


?>


    
    