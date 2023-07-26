<?php
    
    require "inc/soma.php";     //Exige q/ o arquivo exista e funcione, caso contrário gera um erro fatal, barrando a execução do código
    $a = 10;
    $b = 20;
    $result = somar($a,$b);
    echo $result;
    echo "<br/>";
    
    include "inc/subtracao.php";    //Tenta funcionar mesmo se o arquivo não exista ou tenha algum tipo de problema p/ funcionar
    $a = 10;
    $b = 20;
    $result = subtracao($a,$b);
    echo $result;
    echo "<br/>";

    /* INCLUDE - Podemos incluir páginas de outros servidores no site (include remoto), como também este poderá estar exposto caso incluir conteúdos via GET. Também é possível criar um repositório de códigos entre os programadores em uma intranet a partir do uso dessa função no servidor, de modo a centralizar o repositório de códigos e evitar desatualização deles.
    
    REQUIRE - É mais interessante para ser usado, mas na versão 7 do PHP o código não está mais gerando erros fatais podendo ser tratado com try catch
    
    */
    require "inc/divisao.php";
    require_once "inc/divisao.php";     //Caso já foi chamado uma vez anteriomente não é acusado erro.
    $a = 10;
    $b = 20;
    $result = divisao($a,$b);
    echo $result;
    echo "<br/>";
    
    include "inc/multiplicacao.php";
    include_once "inc/multiplicacao.php";   //Caso já foi chamado uma vez anteriomente não é acusado erro.
    $a = 10;
    $b = 20;
    $result = multiplicacao($a,$b);
    echo $result;
    echo "<br/>";
?>
    
    