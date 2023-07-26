<?php

/*
    DIRETORY_SEPARATOR - Constante utilizada para barras; convenha-se utilizar ela para garantir a interoperabiliade do sistema em sistemas operacionais distintos por conta de padrão de barras em diretórios ser diferentes;
    
*/


spl_autoload_register(function($nameClass){
    
    $dirClass = "class";
    $filename = $dirClass.DIRECTORY_SEPARATOR.$nameClass.".php";         //Caminho do arquivo (= path)
    
    if (file_exists($filename)){
        require_once($filename);
    }
});




?>




