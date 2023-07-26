<?php
 
/*
    Situações em que as classes não estão no mesmo diretório
    "spl_autoload_register" permite que mais de uma função seja de "autoload"
*/

function incluirClasses($nomeClasse){
    
    if (file_exists($nomeClasse.".php") === true){
        require_once($nomeClasse.".php");    
    }   
    
}

spl_autoload_register("incluirClasses");    

spl_autoload_register(function($nomeClasse){        //Posso ter "spl_autoload_register" quantas eu julgar necessário
    $caminho = "Abstratas".DIRECTORY_SEPARATOR.$nomeClasse.".php";
    if (file_exists($caminho) === true){
        require_once($caminho);      
    }
});


$carro = new DelRey();
$carro->acelerar(80);


?>


    
    