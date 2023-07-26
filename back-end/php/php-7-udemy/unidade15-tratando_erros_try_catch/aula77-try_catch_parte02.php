<?php

function tratarNome($name){

    if (!$name){
        
        throw new Exception("Nenhum nome foi informado!",1);
    }
    
    echo ucfirst($name)."</br>";
}


try{
    
    tratarNome("João");
    tratarNome("");
    
}catch(Exception $e){
    
    echo $e->getMessage();      //Exibe a mensagem de erro
}
finally{                        //Bloco de código opcional (diferente de try e catch que é obrigatório); sempre executado por ultimo; 
    
    echo "Executou o bloco try";
}

?>