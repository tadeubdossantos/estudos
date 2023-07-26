<?php

/*
    Para desativar a exibição dos erros do PHP é necessário acessar o arquivo de configuração "php.ini" mas também tem como desativar via código;
    
*/

error_reporting(E_ALL & ~E_NOTICE);         //Definição de exibição de erros ("~" refere-se a não exibição da notice)

$nome = $_GET['nome'];  

echo $nome;                                 //Erro não exibido!


?>