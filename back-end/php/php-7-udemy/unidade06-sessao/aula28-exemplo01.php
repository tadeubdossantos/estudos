<?php
        
    //Uso de sessão
    session_start();            //Cada página que for usar sessão devera ativar o seu uso
    echo $_SESSION["nome"];

    echo "<br/>";
    
    unset($_SESSION["profissao"]);  //Destruindo uma sessão
    echo $_SESSION["profissao"];    //Exibição não será possível após a destruição desta sessão
    
?>


    
    