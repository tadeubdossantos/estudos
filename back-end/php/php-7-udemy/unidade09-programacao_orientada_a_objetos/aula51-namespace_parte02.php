<?php
 
/*
    
    Namespace - permite ogarnizar as classes em diretórios de forma organizada; organizar as classes por assuntos; pode acontecer de ter classes de mesmo nome, porém com contextos diferentes e na mesma pasta não será possível; 
    
*/

require_once("config.php");

use Cliente\Cadastro;           //Usar o namespace "Cliente" com a classe "Cadastro"

$cad = new Cadastro();
$cad->setNome("Pedro");
$cad->setEmail("pedro@hotmail.com");
$cad->setSenha("123");

$cad->registrarVenda();

?>

    
    