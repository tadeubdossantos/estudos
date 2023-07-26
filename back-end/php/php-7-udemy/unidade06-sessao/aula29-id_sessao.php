<?php
    //ID de Sessão - É uma identificação única no servidor
    //Cada acesso a página com computadores diferentes irá ter seus respectivos ID de Sessão
    //Ao abrir uma página você guanha um ID de Sessão e caso abra uma outra aba anônima você ganha outro ID de Sessão
    
    require_once("config.php");     //Inclui os arquivos de configurações
    
    //Criando algumas Sessões
    $_SESSION["nome"] = "Tadeu";
    $_SESSION["profissao"] = "Programador";
    
    $id = session_id();             //Gera o ID de Sessão
    echo $id;                       //Exibe o ID de Sessão
    
    echo "<br/><br/>";

    session_regenerate_id();  //Gerar outro ID de Sessão
    $id = session_id();             
    echo $id;

    echo "<br/><br/>";
    
    var_dump($_SESSION);            //Vizualizar todos os dados do array de Sessão
    
    echo "<br/><br/>";

    session_id("abc123");           //Atribuir um ID de sessão
    $id = session_id();             
    echo $id;
?>


    
    