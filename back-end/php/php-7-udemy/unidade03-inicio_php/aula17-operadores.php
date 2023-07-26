<?php

    //OPERADORES DE ATRIBUIÇÃO -----------------------------------------------------------------
    $nome = "Setecom";

    //Operador de Concatenção (.)
    echo $nome . " Desenvolvimento de Sites";
    
    //Operador Composto (.=)
    $nome .= "Treinamentos";        //A variável vai ter o valor dela mesmo mais a adição do próximo conteúdo
    
    echo "<br/>";
    
    $valorTotal = 0;
    $valorTotal += 100;
    $valorTotal += 25;
    echo $valorTotal;
    $valorTotal *= 0.9;
    echo "<br/>";
    echo $valorTotal;
    echo "<br/>";

    //OPERADORES ARITMÉTICOS ------------------------------------------------------------------------------
    $a = 10;
    $b = 2;
    echo $a + $b;     //Adição
    echo "<br/>";
    echo $a - $b;     //Subtração
    echo "<br/>";
    echo $a / $b;     //Divisão
    echo "<br/>";
    echo $a * $b;     //Multiplicação
    echo "<br/>";   
    echo $a % $b;     //Módulo (Resto da Divisão)
    echo "<br/>";   
    echo $a ** $b;     //Potenciação)
    echo "<br/>";

    //OPERADORES DE COMPARAÇÃO --------------------------------------------------------------------------------
    $a = 30;
    $b = 55;
    
    var_dump ($a > $b);         //Comparação de conteúdo maior que o outro
    echo "<br/>"; 
    var_dump ($a < $b);         //Comparação de conteúdo menor que o outro
    echo "<br/>"; 
    var_dump ($a == $b);        //Comparação de igualdade de valor
    echo "<br/>";
    var_dump ($a === $b);       //Comparação de igualdade de valor e tipo   
    echo "<br/>";
    var_dump ($a != $b);       //Comparação de diferença de valor   
    echo "<br/>";
    var_dump ($a !== $b);      //Comparação de diferença de valor e tipo   
    echo "<br/>";

    //OPERADOR ESPACESHIP/NAVE ESPACIAL (NOVIADE DO PHP 7)
    $a = 50;
    $b = 35;
    var_dump($a <=> $b);     /*Se variável "$a" maior que "$b" retorna valor 1
                               Se variável "$a" igual que "$b" retorna valor 0
                               Se variável "$a" menor que "$b" retorna valor -1    
                             */
    echo "<br/>";
    
    //OPERADOR PARA TRATAR VALORES NULOS
    $a = NULL;
    $b = NULL;
    $c = 10;
    echo $a ?? $b ?? $c;    //Retorna somente o valor não nulo (Ex: nessa caso o 10 da variável "$c")
    echo "<br/>"; 

    //OPERADORES INCREMENTAIS E DECREMENTAIS
    
    $a = 20;
    echo $a++;              //Retornará o valor da variável sem acréscimo de 1 unidade
    echo "<br/>";  
    echo $a;                //Retornará o valor já acréscido 1 unidade q/ foi realizada antes
    echo "<br/>";
    echo ++$a;              //Retornará o valor já acréscido 1 unidade (pré-incremento)
    echo "<br/>"; 
    
    $b = 20;
    echo $b--;              //Retornará o valor da variável sem decréscimo de 1 unidade
    echo "<br/>";  
    echo $b;                //Retornará o valor já com decréscimo de 1 unidade q/ foi realizada antes
    echo "<br/>";
    echo --$b;              //Retornará o valor já com decréscimo de 1 unidade (pré-incremento)
    echo "<br/>";

    //ORDEM DE EXECUÇÃO DOS OPERADORES (PRECEDÊNCIA DE OPERADORES)
    $resultado = 10 + 3 / 2;       //Divisão tem prioridade
    echo $resultado;
    echo "<br/>";

    $resultado = (10 + 3) / 2;     //Soma tem prioridade
    echo $resultado;
    echo "<br/>";

    $resultado = (10 + 3) / 2 > 5 && 10 + 5 < 3;    //Uso de Condição
    echo var_dump($resultado);
?>
    
    