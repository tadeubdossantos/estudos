<?php
    $qualSuaIdade = 30;
    
    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;
   
    //EXEMPLO DO USO IF-ELSE
    if ($qualSuaIdade < $idadeCrianca ){
        echo "É uma Criança!";
    }
    else{
        echo "Não é uma Criança!";
    }
    
    echo "<br/>";

    //EXEMPLO DO USO DO IF-ELSEIF-ELSE
    if ($qualSuaIdade < $idadeCrianca ){
        echo "É uma Criança!";
    }
    else if($qualSuaIdade < $idadeMaior){
        echo "É uma adolescente!";
    }
    else if ($qualSuaIdade < $idadeMelhor){
        echo "É um Adulto!";
    }
    else{
        echo "É um Idoso";
    }
    
    echo "<br/>";

    //EXEMPLO DO USO DO OPERADOR TERNARIO (É UM IF MAIS SIMPLES)
    echo ($qualSuaIdade < $idadeMaior) ? "Menor de Idade!" : "Maior de Idade!";
?>  

    
    