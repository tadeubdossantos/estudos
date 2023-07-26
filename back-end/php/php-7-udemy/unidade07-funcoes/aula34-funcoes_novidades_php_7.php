<?php
    //PHP é uma linguagem fracamente tipada (Variáveis podem receber valores de quaisquer tipos de dados)

    //Novidade 1: Obrigar um tipo de dado no argumento da função
    
    function soma(int ...$valores){     //Argumentos abriga uma qtd de número ilimitados que obrigatoriamente seja do tipo inteiro
        return array_sum($valores);
    }
    
    echo soma(1,2);         //Soma de 2 valores
    echo "<br/>";
   
    echo soma(1,5,5);       //Soma de 3 valores
    echo "<br/>";
    
    echo soma(1.5,2.3);     //Soma de 2 valores, porém somente somando a parte antes da vírgula (Caso de Números de Ponto Flutuante), pois somente aceita número inteiros como argumentos
    echo "<br/>;"
  
    /*  NÃO FUNCIONOU !!
    //Novidade 2: Obrigar um tipo de dado de retorno da função
    
    function soma2(float ...$valores):float{    //Argumentos abriga uma qtd de número ilimitados que obrigatoriamente seja do tipo float
        return array_sum($valores);        
    } 

    echo soma2(5,2);         //Soma de 2 valores
    echo "<br/>";
   
    echo soma2(2.5,3.6,5.8);       //Soma de 3 valores
    echo "<br/>";
    
    */
?>  


    
    