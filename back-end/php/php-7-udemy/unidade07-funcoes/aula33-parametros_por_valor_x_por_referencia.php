<?php
 
    //Variável é diferente de parâmetro da função mesmo possuindo o mesmo nome
    //Variável possui dados armazenado em um local de armazenamento e parâmetro de função já fica em outro local de armazenamento
    
    //Exemplo de parâmetro por valor
    $a = 10;

    function trocarValor($a){
        $a = 50;
        return $a;
    }

    echo $a;                //Variável com escopo padrão
    echo "<br/>";
    echo trocarValor($a);   //Retorno de váriavel com escopo da função
    
    echo "<br/>";
    
    //Parâmetro por refêrencia é informar a referência de alguma variável para que seja mapipulada

    //Exemplo de parâmetro por referência
    
    $cumprimento = "Bom dia!";

    function cumprimentar(&$cump){
        $cump = "Good Morning!";
        return $cump;
    }
    
    echo $cumprimento;
    echo "<br/>";
    echo cumprimentar($cumprimento);
    echo "<br/>";
    echo $cumprimento;
    
?>


    
    