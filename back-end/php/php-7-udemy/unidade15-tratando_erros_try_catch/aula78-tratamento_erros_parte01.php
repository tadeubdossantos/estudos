<?php

/*
    Todos os erros causados no PHP são convertidos para Exception;
    Muitos problemas o Try e Catch não chega a pegar;
    Existem outras ferramentas para tratar erros
    Não vamos usar o Exception pois o try e catch que o tratam
    Tem coisa que é fatal erro, tem coisa que é exceção (exception), tem o warm e noticias
    Como manipular um cabeçario de erros (pode acontecer o erro, se aconter aborte e não mostre o php vai fazer e ao inves dele execute uma função)
*/

function error_handler($code, $message, $file, $line){               //Função definida para Tratamento de erros

    echo json_encode(array(                                          //Vamor gerar um json p/ o front tratar c/ quiser
        "code"=>$code,
        "message"=>$message,
        "line"=>$line,
        "file"=>$file
    ));         
}


set_error_handler("error_handler");                                  //Quando ocorrer um erro usar uma determinada função

echo 100/0;



//OBS: Este arquivo normalmente ficaria em um arquivo de configuração genérico "config.php" junto com a função "__autload"
?>