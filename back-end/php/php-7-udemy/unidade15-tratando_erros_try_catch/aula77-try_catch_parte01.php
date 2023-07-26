<?php
 
/*
   Tratar erros em blocos de códigos que podem gerar algum erro inesperado; imaginar um possível problema e já deixar uma solução pronta para solucioná-lo; 
   
*/

try{
    //Exemplo de forçar um erro
    throw new Exception("Houve um erro.", 400);         //Erro de exceção (mensagem do erro e número de erro definido pelo programador)
    
}catch(Exception $e){                                   //Joga as informações do erro na variável "$e"
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    
    ));
}



?>

    
    