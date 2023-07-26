<?php
 
/*
    
    Namespace - permite ogarnizar as classes em diretórios de forma organizada; organizar as classes por assuntos; pode acontecer de ter classes de mesmo nome, porém com contextos diferentes e na mesma pasta não será possível; 
    
*/

require_once("config.php");

$cad = new Cadastro();
$cad->setNome("Pedro");
$cad->setEmail("pedro@hotmail.com");
$cad->setSenha("123");

echo $cad;          //Não tem como ler os dados de um objeto com o echo, mas como na classe dele foi definido um método mágico "__toString" automaticamente este é chamado e conforme sua definição é retornado json

?>

    
    