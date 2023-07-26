<?php
 
    require_once("config.php");

    echo session_save_path();       //Caminho do armazenamento do sessão atual

    echo "<br/><br/>";

    var_dump(session_status());     //Retorna o status da Sessão
    
     echo "<br/><br/>";

    switch(session_status()){       //Aplicação do "Switch" para informar o status de Sessão
        
        case PHP_SESSION_DISABLED;
        echo "Sessões Desabilitadas!";
        break;
            
        case PHP_SESSION_NONE;
        echo "Sessões Habilitadas, porém nenhuma já criada!";
        break;
        
        case PHP_SESSION_ACTIVE;
        echo "Sessões Habilitas, ao menos uma já existe!";
        break;
    }
?>


    
    