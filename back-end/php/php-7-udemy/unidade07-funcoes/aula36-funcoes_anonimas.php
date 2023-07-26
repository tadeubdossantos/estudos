<?php
    
    //Funções Anônimas são aquelas possuem nomes definidos
    //São funções que também não possui retorno
    //Qualquer Variável pode receber uma função
    //Muito usado em Javascrtip

    //CASO 1: Passar em uma função um parâmetro que também é função, porém sendo esta anônima
    function test($callback){
        
        //Supõe um processo lento (Coversão de um vídeo)
        
        //Após terminar o processo lento executa o código abaixo
        $callback;          //Variável que vai armazenar uma função anônima
    }

    test(function(){        //Chamo a função passando como parâmetro ou função, porém sendo esta anônima.
        echo "Terminou!!";        
    });

    
    //CASO 2: Armazenar um função em uma variável
    $fn = function($a){
        var_dump($a);
    };
    
    //Chama a variável e passa um parâmetro na função anônima
    $fn("a");   
?>  



    
    