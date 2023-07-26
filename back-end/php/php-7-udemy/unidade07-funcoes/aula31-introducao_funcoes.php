<?php
 
    //Funções Definidas pelo Usuário (User Function) - São funções desenvolvidas pelo usuário
    //Criação de funções que atenda as regras de négocio a partir de inclusão de parâmetros (entrada de dados)
    //Funções propriamente dita retornam valores, as que não retornam somente executam instruções de códigos

    //Exemplo de Função sem retorno
    function ola(){
        echo "Olá Mundo!<br/>";
    }
    
    ola();

    //Exemplo de Função com retorno
    function ola2(){
        return "Olá Mundo Novamente!<br/>";
    }

    echo ola2();

    echo "<br/>";
    
    //Exemplo de função com retorno
    function salario(){
        return 500;       
    }

    echo "João ganhou 3 salarios ".salario()*3;
?>


    
    